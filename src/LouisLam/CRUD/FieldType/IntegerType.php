<?php
/**
 * Created by PhpStorm.
 * User: Louis Lam
 * Date: 8/13/2015
 * Time: 9:33 PM
 */

namespace LouisLam\CRUD\FieldType;


class IntegerType extends FieldType
{
    /**
     * Render Field for Create/Edit
     * @param bool|true $echo
     * @return string
     */
    public function render($echo = true)
    {
        $name = $this->field->getName();
        $display = $this->field->getDisplayName();
        $defaultValue = $this->field->getDefaultValue();
        $bean = $this->field->getBean();
        $value = "";
        $readOnly = $this->getReadOnlyString();
        $required = $this->getRequiredString();

        if ($this->field->isCreate()) {

            // Create Page
            // Use Default Value if not null
            if ($defaultValue !== null) {
                $value = $defaultValue;
            }

        } else {

            // Edit Page
            // Use the value from Database
            $value = $bean->{$name};

        }

        $html  = <<< EOF
        <label>$display <input min="0" step="1" type="number" name="$name" value="$value" $readOnly $required /></label>
EOF;

        if ($echo)
            echo $html;

        return $html;
    }


}