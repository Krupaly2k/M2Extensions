<?php
namespace Ninetwo\Photoupload\Block\Adminhtml\Photoupload\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_photoupload_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Photoupload Information'));
    }
}