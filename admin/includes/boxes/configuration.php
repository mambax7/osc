<?php
/**
 * $Id: configuration.php 46 2005-11-30 09:13:15Z Michael $
 * osCommerce, Open Source E-Commerce Solutions
 * http://www.oscommerce.com
 * Copyright (c) 2002 osCommerce
 * Released under the GNU General Public License
 * adapted for xoops by michael hammelmann <michael.hammelmann@flinkux.de> <http://www.flinkux.de>
 * Copyright (c) 2005 FlinkUX Michael Hammelmann <michael.hammelmann@flinkux.de>
 * @package xosC
 * @subpackage admin
**/
?>
<!-- configuration //-->
          <tr>
            <td>
<?php
  $heading = array();
  $contents = array();

  $heading[] = array('text'  => BOX_HEADING_CONFIGURATION,
                     'link'  => tep_href_link(FILENAME_CONFIGURATION, 'gID=1&selected_box=configuration'));

  if ($selected_box == 'configuration') {
    $cfg_groups = '';
    $configuration_groups_query = tep_db_query("select configuration_group_id as cgID, configuration_group_title as cgTitle from " . TABLE_CONFIGURATION_GROUP . " where visible = '1' order by sort_order");
    while ($configuration_groups = tep_db_fetch_array($configuration_groups_query)) {
      $cfg_groups .= '<a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=' . $configuration_groups['cgID'] . '&selected_box=configuration', 'NONSSL') . '" class="menuBoxContentLink">' . $configuration_groups['cgTitle'] . '</a><br>';
    }

    $contents[] = array('text'  => $cfg_groups);
  }

  $box = new box;
  echo $box->menuBox($heading, $contents);
?>
            </td>
          </tr>
<!-- configuration_eof //-->