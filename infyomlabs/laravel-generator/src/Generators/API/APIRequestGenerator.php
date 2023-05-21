<?php

namespace InfyOm\Generator\Generators\API;

use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Generators\BaseGenerator;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\TemplateUtil;

class APIRequestGenerator extends BaseGenerator
{
    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;

    /** @var string */
    private $createFileName;

    /** @var string */
    private $updateFileName;

    public function __construct(CommandData $commandData)
    {
        $this->commandData = $commandData;
        $this->path = $commandData->config->pathApiRequest;
        $this->createFileName = 'Create' . $this->commandData->modelName . 'APIRequest.php';
        $this->updateFileName = 'Update' . $this->commandData->modelName . 'APIRequest.php';
    }

    public function generate()
    {
        $this->generateCreateRequest();
        $this->generateUpdateRequest();
    }

    public function rollback()
    {
        if ($this->rollbackFile($this->path, $this->createFileName)) {
            $this->commandData->commandComment('Create API Request file deleted: ' . $this->createFileName);
        }

        if ($this->rollbackFile($this->path, $this->updateFileName)) {
            $this->commandData->commandComment('Update API Request file deleted: ' . $this->updateFileName);
        }
    }

    private function generateCreateRequest()
    {
        $templateData = TemplateUtil::getTemplate('api.request.create_request', 'laravel-generator');

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        FileUtil::createFile($this->path, $this->createFileName, $templateData);

        $this->commandData->commandComment("\nCreate Request created: ");
        $this->commandData->commandInfo($this->createFileName);
    }

    private function generateUpdateRequest()
    {
        $templateData = TemplateUtil::getTemplate('api.request.update_request', 'laravel-generator');

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        FileUtil::createFile($this->path, $this->updateFileName, $templateData);

        $this->commandData->commandComment("\nUpdate Request created: ");
        $this->commandData->commandInfo($this->updateFileName);
    }
}
