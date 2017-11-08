<?php

namespace StuntCoders\PasswordConfirmation\Plugin\Controller;

class CreatePostPlugin
{
    public function beforeExecute(\Magento\Customer\Controller\Account\CreatePost $subject)
    {
        $subject->getRequest()->setPostvalue('password_confirmation', $subject->getRequest()->getParam('password'));
    }
}
