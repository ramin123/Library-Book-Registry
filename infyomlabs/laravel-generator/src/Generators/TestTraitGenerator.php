<?php

namespace InfyOm\Generator\Generators;

use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\GeneratorFieldsInputUtil;
use InfyOm\Generator\Utils\TemplateUtil;

class TestTraitGenerator extends BaseGenerator
{
    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;

    /** @var string */
    private $fileName;

    public function __construct(CommandData $commandData)
    {
        $this->commandData = $commandData;
        $this->path = $commandData->config->pathApiTestTraits;
        $this->fileName = 'Make' . $this->commandData->modelName . 'Trait.php';
    }

    public function generate()
    {
        $templateData = TemplateUtil::getTemplate('test.trait', 'laravel-generator');

        $templateData = $this->fillTemplate($templateData);

        FileUtil::createFile($this->path, $this->fileName, $templateData);

        $this->commandData->commandObj->comment("\nTestTrait created: ");
        $this->commandData->commandObj->info($this->fileName);
    }

    public function rollback()
    {
        if ($this->rollbackFile($this->path, $this->fileName)) {
            $this->commandData->commandComment('Test trait file deleted: ' . $this->fileName);
        }
    }

    private function fillTemplate($templateData)
    {
        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        return str_replace('$FIELDS$', implode(',' . infy_nl_tab(1, 3), $this->generateFields()), $templateData);
    
    }

    private function generateFields()
    {
        $fields = [];

        foreach ($this->commandData->inputFields as $field) {
            if ($field['primary']) {
                continue;
            }

            $fieldData = "'" . $field['fieldName'] . "' => " . '$fake->';

            switch ($field['fieldType']) {
                case 'integer':
                case 'float':
                    $fakerData = 'randomDigitNotNull';
                    break;
                case 'string':
                    $fakerData = 'word';
                    break;
                case 'text':
                    $fakerData = 'text';
                    break;
                case 'datetime':
                    $fakerData = "date('Y-m-d H:i:s')";
                    break;
                case 'enum':
                    $fakerData = 'randomElement(' . GeneratorFieldsInputUtil::prepareValuesArrayStr(explode(',', $field['htmlTypeInputs'])) . ')';
                    break;
                default:
                    $fakerData = 'word';
            }

            $fieldData .= $fakerData;

            $fields[] = $fieldData;
        }

        return $fields;
    }
}
