<?php
namespace helperData;

/**
 * функция возврашает текушее знаечения года в полном формате
 * @return значение текушего года
 */
function getYear(){
   return date('Y');
};

/**
 * функция возврашает дату с разницей между текушего года минус количество дней
 * @param количество дней
 * @return значение текушего года минус количество дней 
 */
function getDate($day = 0, $format = 'SITE_DATA_FORMAT_SHORT'){
  switch($format){
    case 'long':
      $returnFormat = 'SITE_DATA_FORMAT_LONG';
      break;
    case 'short':
    default:
      $returnFormat = 'SITE_DATA_FORMAT_SHORT';
      break;

  }
  return date($returnFormat, time() - $day*86400);
};
?>