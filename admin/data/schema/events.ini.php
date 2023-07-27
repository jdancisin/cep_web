<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_description' => '',
  '_detailPage' => '/events/showevent.php',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableEraseFromModify' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => '',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '/events/',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '100',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'events',
  'listPageFields' => 'dragSortOrder, title, num, date_time, type, staging_mode, archive',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => 'title, content',
  'menuHidden' => '0',
  'menuName' => 'Events Archive',
  'menuOrder' => '0000000017',
  'menuPrefixIcon' => 'fas fa-calendar',
  'menuType' => 'multi',
  'num' => array(
    'order' => '1',
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => '2',
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => '3',
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => '4',
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => '5',
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'dragSortOrder' => array(
    'order' => '6',
    'label' => 'Order',
    'type' => 'none',
  ),
  'title' => array(
    'order' => '7',
    'label' => 'Title',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '400',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'date' => array(
    'order' => '8',
    'label' => 'Date/Time',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '400',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'date_time' => array(
    'order' => '9',
    'label' => 'Date/Time',
    'type' => 'date',
    'isUnique' => '0',
    'showTime' => '1',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '2008',
    'yearRangeEnd' => '2018',
  ),
  'location' => array(
    'order' => '10',
    'label' => 'Location',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '400',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  '__separator001__' => array(
    'order' => '11',
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Options',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'type' => array(
    'order' => '12',
    'label' => 'Type',
    'type' => 'list',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'radios',
    'optionsType' => 'text',
    'optionsText' => 'CEP Event
External Event',
  ),
  'hidden' => array(
    'order' => '13',
    'label' => 'Hidden',
    'type' => 'checkbox',
    'checkedByDefault' => '0',
    'description' => '',
    'checkedValue' => '1',
    'uncheckedValue' => '0',
  ),
  'staging_mode' => array(
    'order' => '14',
    'label' => 'Staging Mode',
    'type' => 'checkbox',
    'checkedByDefault' => '1',
    'description' => '',
    'checkedValue' => 'Yes',
    'uncheckedValue' => 'No',
  ),
  '__separator003__' => array(
    'order' => '15',
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Event Info',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'external_link' => array(
    'order' => '16',
    'label' => 'External Link',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '400',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'header_image' => array(
    'order' => '17',
    'label' => 'Header Image',
    'type' => 'upload',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png',
    'checkMaxUploadSize' => '0',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '1',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '700',
    'maxImageWidth' => '700',
    'createThumbnails' => '0',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => '',
    'infoField2' => '',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'content' => array(
    'order' => '18',
    'label' => 'Main Content',
    'type' => 'wysiwyg',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '600',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
  ),
  'rsvp_link' => array(
    'order' => '19',
    'label' => 'RSVP Link',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '400',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'google_map_link' => array(
    'order' => '20',
    'label' => 'Google Map Link',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'sidebar' => array(
    'order' => '21',
    'label' => 'Sidebar',
    'type' => 'wysiwyg',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '300',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
  ),
  '__separator002__' => array(
    'order' => '22',
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'header bar',
    'separatorHeader' => 'Past Event Options',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'archive' => array(
    'order' => '23',
    'label' => 'Archive?',
    'type' => 'checkbox',
    'checkedByDefault' => '0',
    'description' => '',
    'checkedValue' => 'Yes',
    'uncheckedValue' => 'No',
  ),
  'photos_link' => array(
    'order' => '24',
    'label' => 'Photos Link',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '400',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'preview_graphic' => array(
    'order' => '1310179800',
    'label' => 'Preview Graphic',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
);
?>