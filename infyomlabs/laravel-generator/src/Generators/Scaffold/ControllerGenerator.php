<?php

namespace InfyOm\Generator\Generators\Scaffold;

use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Generators\BaseGenerator;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\TemplateUtil;

class ControllerGenerator extends BaseGenerator
{
    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;

    /** @var string */
    private $templateType;

    /** @var string */
    private $fileName;

    public function __construct(CommandData $commandData)
    {
        $this->commandData = $commandData;
        $this->path = $commandData->config->pathController;
        $this->templateType = config('infyom.laravel_generator.templates', 'core-templates');
        $this->fileName = $this->commandData->modelName . 'Controller.php';
    }

    public function generate()
    {
        foreach ($this->commandData->inputFields as $field) {
            if ($this->commandData->getAddOn('datatables')) {
                $templateData = TemplateUtil::getTemplate('scaffold.controller.datatable_controller', 'laravel-generator');

                $this->generateDataTable();
            } else {
                $templateData = TemplateUtil::getTemplate('scaffold.controller.controller', 'laravel-generator');

                $paginate = $this->commandData->getOption('paginate');

                if ($paginate) {
                    $templateData = str_replace('$RENDER_TYPE$', 'paginate(' . $paginate . ')', $templateData);
                } else {
                    $templateData = str_replace('$RENDER_TYPE$', 'all()', $templateData);
                }
            }
            //dd($field['htmlType'] .$field['databaseInputs']);
            if ($field['htmlType'] === 'checkbox') {
                $checkbox_name = '';
                $checkboxName = $field['fieldName'];
                $checked_value = 1;
                $unchecked_value = 0;
                $checkbox_name .= "
                        if(\$request->has('${checkboxName}')){
	                    \$request->merge(['${checkboxName}' => ${checked_value}]);
	                    }
                        else{
                        \$request->merge(['${checkboxName}' => ${unchecked_value}]);
                         }";
                $templateData = str_replace('$CHECKBOX_UPDATE', $checkbox_name, $templateData);
                $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);
                FileUtil::createFile($this->path, $this->fileName, $templateData);
            } else {
                $templateData = str_replace('$CHECKBOX_UPDATE', '', $templateData);
                $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);
                FileUtil::createFile($this->path, $this->fileName, $templateData);
            }
        }

        $this->commandData->commandComment("\nController created: ");
        $this->commandData->commandInfo($this->fileName);
    }

    public function rollback()
    {
        if ($this->rollbackFile($this->path, $this->fileName)) {
            $this->commandData->commandComment('Controller file deleted: ' . $this->fileName);
        }
    }

    private function generateDataTable()
    {
        $templateData = TemplateUtil::getTemplate('scaffold.datatable', 'laravel-generator');

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        $headerFieldTemplate = TemplateUtil::getTemplate('scaffold.views.datatable_column', $this->templateType);

        $headerFields = [];

        foreach ($this->commandData->inputFields as $field) {
            if (! $field['inIndex']) {
                continue;
            }
            $headerFields[] = $fieldTemplate = TemplateUtil::fillTemplateWithFieldData(
                $this->commandData->dynamicVars,
                $this->commandData->fieldNamesMapping,
                $headerFieldTemplate,
                $field
            );
        }

        $path = $this->commandData->config->pathDataTables;

        $fileName = $this->commandData->modelName . 'DataTable.php';

        $fields = implode(',' . infy_nl_tab(1, 3), $headerFields);

        $templateData = str_replace('$DATATABLE_COLUMNS$', $fields, $templateData);

        FileUtil::createFile($path, $fileName, $templateData);

        $this->commandData->commandComment("\n${fileName} created: ");
        $this->commandData->commandInfo($fileName);
    }
}
