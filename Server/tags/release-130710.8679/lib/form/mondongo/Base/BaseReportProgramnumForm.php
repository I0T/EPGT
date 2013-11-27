<?php

/**
 * ReportProgramnum Base Form.
 */
class BaseReportProgramnumForm extends BaseFormMondongo
{

    /**
     * @see sfForm
     */
    public function setup()
    {
        $this->setWidgets(array(
            'spid' => new sfWidgetFormInputText(array(), array()),
            'newwork_id' => new sfWidgetFormInputText(array(), array()),
            'newwork_name' => new sfWidgetFormInputText(array(), array()),
            'version' => new sfWidgetFormInputText(array(), array()),
            'city' => new sfWidgetFormInputText(array(), array()),
            'date' => new sfWidgetFormInputText(array(), array()),
            'num' => new sfWidgetFormInputText(array(), array()),
            'created_at' => new sfWidgetFormDateTime(array(), array()),
            'updated_at' => new sfWidgetFormDateTime(array(), array()),

        ));

        $this->setValidators(array(
            'spid' => new sfValidatorString(array(), array()),
            'newwork_id' => new sfValidatorString(array(), array()),
            'newwork_name' => new sfValidatorString(array(), array()),
            'version' => new sfValidatorString(array(), array()),
            'city' => new sfValidatorString(array(), array()),
            'date' => new sfValidatorString(array(), array()),
            'num' => new sfValidatorInteger(array(), array()),
            'created_at' => new sfValidatorDateTime(array(), array()),
            'updated_at' => new sfValidatorDateTime(array(), array()),

        ));

        $this->widgetSchema->setNameFormat('report_programnum[%s]');
    }

    /**
     * @see sfMondongoForm
     */
    public function getModelName()
    {
        return 'ReportProgramnum';
    }
}