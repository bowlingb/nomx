 <?php if( !defined('POSTFIXADMIN') ) die( "This file cannot be used standalone." ); ?>

<?php

$file = 'list-virtual.php';

# search highlighting
function searchhl($text) {
   global $search;
   if ($search == "") {
      return $text;
   } else {
      return str_ireplace($search, "<span class='searchresult' style='background:lightgreen'>" . $search . "</span>", $text);
      # TODO: find out why .searchresult class in css file doesn't work
   }
}

?>

<div id="nav_bar">
   <table width=730><colgroup span="1"><col width="550"></col></colgroup> 
   <tr><td align=left >
<?php
if ($limit['alias_pgindex_count'] ) print "<b>".$PALANG['pOverview_alias_title']."</b>&nbsp&nbsp";
($tDisplay_back_show == 1) ? $highlight_at = $tDisplay_back / $CONF['page_size'] + 1 : $highlight_at = 0;
$current_limit=$highlight_at * $CONF['page_size'];
for ($i = 0; $i < $limit['alias_pgindex_count']; $i++)
{
   if ( $i == $highlight_at )
   {
      print  "<a href=\"$file?domain=$fDomain&limit=" . $i * $CONF['page_size'] . "\"><b>" . $limit['alias_pgindex'][$i] . "</b></a>\n";
   }
   else
   {
      print  "<a href=\"$file?domain=$fDomain&limit=" . $i * $CONF['page_size'] . "\">" . $limit['alias_pgindex'][$i] . "</a>\n";
   }
}
print "</td><td valign=middle align=right>";

if ($tDisplay_back_show == 1)
{
   print "<a href=\"$file?domain=$fDomain&limit=$tDisplay_back\"><img border=\"0\" src=\"images/arrow-l.png\" title=\"" . $PALANG['pOverview_left_arrow'] . "\" alt=\"" . $PALANG['pOverview_left_arrow'] . "\" /></a>\n";
}
if ($tDisplay_up_show == 1)
{
   print "<a href=\"$file?domain=$fDomain&limit=0\"><img border=\"0\" src=\"images/arrow-u.png\" title=\"" . $PALANG['pOverview_up_arrow'] . "\" alt=\"" . $PALANG['pOverview_up_arrow'] . "\" /></a>\n";
}
if ($tDisplay_next_show == 1)
{
   print "<a href=\"$file?domain=$fDomain&limit=$tDisplay_next\"><img border=\"0\" src=\"images/arrow-r.png\" title=\"" . $PALANG['pOverview_right_arrow'] . "\" alt=\"" . $PALANG['pOverview_right_arrow'] . "\" /></a>\n";
}
print "</td></tr></table></div>\n";


if (boolconf('alias_domain')) {
# XXX: the following block misses one intention level
if ((sizeof ($tAliasDomains) > 0) || (is_array ($tTargetDomain) ))
{
print "<div class=\"container-fluid\"><table id=\"alias_domain_table\" class=\"table table-striped table-hover Usertable table-bordered\">\n";


   print "   <tr>\n";
   print "      <td colspan=\"4\"><h3>" . $PALANG['pOverview_alias_domain_title'] . "</h3></td>";
   print "   </tr>";
   if(sizeof ($tAliasDomains) > 0)
   {
      print "   <tr class=\"header\">\n";
      print "      <td>" . sprintf($PALANG['pOverview_alias_domain_aliases'], $fDomain) . "</td>\n";
      print "      <td>" . $PALANG['pOverview_alias_domain_modified'] . "</td>\n";
      print "      <td>&nbsp;</td>\n";
      print "   </tr>\n";
      for ($i = 0; $i < sizeof ($tAliasDomains); $i++)
      {
         print "   <tr class=\"hilightoff\" onMouseOver=\"className='hilighton';\" onMouseOut=\"className='hilightoff';\">\n";
         print "      <td><a href=\"$file?domain=" . urlencode ($tAliasDomains[$i]['alias_domain']) . "&limit=" . $current_limit . "\">" . $tAliasDomains[$i]['alias_domain'] . "</a></td>\n";
         print "      <td>" . $tAliasDomains[$i]['modified'] . "</td>\n";
         print "      <td><a href=\"delete.php?table=alias_domain&delete=" . urlencode ($tAliasDomains[$i]['alias_domain']) . "&domain="
           . urlencode ($tAliasDomains[$i]['alias_domain']) 
           . " \"onclick=\"return confirm ('" . $PALANG['confirm'] . $PALANG['pOverview_get_alias_domains'] . ": ". $tAliasDomains[$i]['alias_domain'] . "')\">" . $PALANG['del'] . "</a></td>\n";
         print "   </tr>\n";
      }
   }

   if(is_array($tTargetDomain))
   {
      print "   <tr class=\"header\">\n";
      print "      <td>" . sprintf($PALANG['pOverview_alias_domain_target'], $fDomain) . "</td>\n";
      print "      <td>" . $PALANG['pOverview_alias_domain_modified'] . "</td>\n";
      print "      <td>&nbsp;</td>\n";
      print "   </tr>\n";
      print "   <tr class=\"hilightoff\" onMouseOver=\"className='hilighton';\" onMouseOut=\"className='hilightoff';\">\n";
      print "      <td><a href=\"$file?domain=" . urlencode ($tTargetDomain['target_domain']) . "&limit=" . $current_limit . "\">" . $tTargetDomain['target_domain'] . "</a></td>\n";
      print "      <td>" . $tTargetDomain['modified'] . "</td>\n";
      print "      <td><a href=\"delete.php?table=alias_domain&delete=" . urlencode ($fDomain) . "&domain=" . urlencode ($fDomain) . "\" onclick=\"return confirm ('" . $PALANG['confirm'] . $PALANG['pOverview_get_alias_domains'] . ": " . htmlentities ($fDomain) . "')\">" . $PALANG['del'] . "</a></td>\n";
      print "   </tr>\n";

   }
   print "</table>\n";
}
# XXX: the above block misses one intention level
   //if (!is_array($tTargetDomain))
   //{
      # TODO: don't print create link if no domains are left for aliasing
      print "<p><a href=\"create-alias-domain.php?target_domain=$fDomain\">" . $PALANG['pMenu_create_alias_domain'] . "</a>\n";
   //}
}

if (sizeof ($tAlias) > 0)
{
#print "<div class=\"container-fluid\"><table id=\"alias_domain_table\" class=\"table table-striped table-hover Usertable table-bordered\">\n";
# print "<div class=\"container-fluid\"><table id=\"table table-striped table-hover Usertable table-bordered css-serial\">\n";
   print "<div class=\"container-fluid\"><table class=\"table table-striped table-hover Usertable table-bordered\">\n";

   print "   <tr>\n";
   print "      <td colspan=\"7\"><caption><h3>" . $PALANG['pOverview_alias_title'] . "</h3></caption></td>";
   print "   </tr>";
   print "   <tr>\n";
   if ($CONF['show_status'] == 'YES') { print "<td></td>\n"; }
   print "      <td>" . $PALANG['pOverview_alias_domain'] . "</td>\n";
   print "      <td>" . $PALANG['pOverview_alias_address'] . "</td>\n";
   print "      <td>" . $PALANG['pOverview_alias_goto'] . "</td>\n";
   print "      <td>" . $PALANG['pOverview_alias_modified'] . "</td>\n";
   print "      <td colspan=\"2\">&nbsp;</td>\n";
   print "   </tr>\n";

   for ($i = 0; $i < sizeof ($tAlias); $i++)

 

   {
      if ((is_array ($tAlias) and sizeof ($tAlias) > 0))
      {


		if ($tAlias[$i]['domain'] == 'HANDSHAKE') { print ""; } else {
        	 print "   <tr class=\"hilightoff\" onMouseOver=\"className='hilighton';\" onMouseOut=\"className='hilightoff';\">\n";
         	print "  <td>" . $tAlias[$i]['domain'] . "</td>\n";
		}


         if ($CONF['show_status'] == 'YES')
         {


		if ($tAlias[$i]['domain'] == 'HANDSHAKE') { print ""; } else {
		print "  <td>" . gen_show_status($tAlias[$i]['address']) . "</td>\n";
		}


         }
		if ($tAlias[$i]['domain'] == 'HANDSHAKE') { print ""; } else {
		print "      <td>" . searchhl($tAlias[$i]['address']) . "</td>\n";
		}


         if ($CONF['alias_goto_limit'] > 0) {
            print "      <td>" . searchhl(preg_replace (
               "/,/", 
               "<br>", 
                  preg_replace(
                     '/^(([^,]+,){'.$CONF['alias_goto_limit'].'})[^,]+,.*/',
                     '$1' . sprintf(
                        $PALANG['and_x_more'], 
                        (substr_count ($tAlias[$i]['goto'], ',') - $CONF['alias_goto_limit'] + 1) 
                     ),
                     $tAlias[$i]['goto']
                  )
               )) . "</td>\n";
         } else {

		if ($tAlias[$i]['domain'] == 'HANDSHAKE') { print ""; } else {
		print "      <td>" . searchhl(preg_replace ("/,/", "<br>", $tAlias[$i]['goto'])) . "</td>\n";
		}

         }
        

	if ($tAlias[$i]['domain'] == 'HANDSHAKE') { print ""; } else {
	print "      <td>" . $tAlias[$i]['modified'] . "</td>\n";
	}

# TODO: merge superadmin / domain admin code
         if (authentication_has_role('global-admin')) {
# superadmin code


	if ($tAlias[$i]['domain'] == 'HANDSHAKE') { print ""; } else {
	print "      <td><a href=\"edit-alias.php?address=" . urlencode ($tAlias[$i]['address']) . "\">" . $PALANG['edit'] . "</a></td>\n";
	}
	if ($tAlias[$i]['domain'] == 'HANDSHAKE') { print ""; } else {
	print "      <td><a href=\"delete.php?table=alias" . "&delete=" . urlencode ($tAlias[$i]['address']) . "&domain={$tAlias[$i][domain]}" . "\"onclick=\"return confirm ('" . $PALANG['confirm'] . $PALANG['pOverview_get_aliases'] . ": ". $tAlias[$i]['address'] . "')\">" . $PALANG['del'] . "</a></td>\n";
	}




         } else {
# domain admin code
         if ($CONF['special_alias_control'] == 'YES')
         {
            print "      <td><a href=\"edit-alias.php?address=" . urlencode ($tAlias[$i]['address']) . "\">" . $PALANG['edit'] . "</a></td>\n";
            print "      <td><a href=\"delete.php?table=alias&delete=" . urlencode ($tAlias[$i]['address']) . "&domain={$tAlias[$i][domain]}" . "\"onclick=\"return confirm ('" . $PALANG['confirm'] . $PALANG['pOverview_get_aliases'] . ": ". $tAlias[$i]['address'] . "')\">" . $PALANG['del'] . "</a></td>\n";
         }
         else
         {
            if ( check_alias_owner ($SESSID_USERNAME, $tAlias[$i]['address']))
            {

               print "      <td><a href=\"edit-alias.php?address=" . urlencode ($tAlias[$i]['address']) . "\">" . $PALANG['edit'] . "</a></td>\n";
               print "      <td><a href=\"delete.php?table=alias&delete=" . urlencode ($tAlias[$i]['address']) . "&domain=$fDomain" . "\"onclick=\"return confirm ('" . $PALANG['confirm'] . $PALANG['pOverview_get_aliases'] . ": ". $tAlias[$i]['address'] . "')\">" . $PALANG['del'] . "</a></td>\n";
            }
            else
            {
               //this is a special alias, show status only, don't allow changes
               print "      <td>&nbsp;</td>\n";
               print "      <td>&nbsp;</td>\n";
            }
         }
# end diff
         }

         print "   </tr>\n";
      }
   }
   print "</table></div>\n";
}


if($tCanAddAlias) {
   print "<p><a href=\"create-alias.php?domain=$fDomain\">" . $PALANG['pMenu_create_alias'] . "</a>\n";
}

if (sizeof ($tMailbox) > 0) {
   print "<div id=\"nav_bar\"><a name=\"MidArrow\"></a>\n<table width=730><colgroup span=\"1\"> <col width=\"550\"></col></colgroup> <tr><td align=left >";
   if ( $limit['mbox_pgindex_count'] ) print "<b>".$PALANG['pOverview_mailbox_title']."</b>&nbsp&nbsp";
   ($tDisplay_back_show == 1) ? $highlight_at = $tDisplay_back / $CONF['page_size'] + 1 : $highlight_at = 0;
   for ($i = 0; $i < $limit['mbox_pgindex_count']; $i++)
   {
      if ( $i == $highlight_at )
      {
         print  "<a href=\"$file?domain=$fDomain&limit=" . $i * $CONF['page_size'] . "#MidArrow\"><b>" . $limit['mbox_pgindex'][$i] . "</b></a>\n";
      }
      else
      {
         print  "<a href=\"$file?domain=$fDomain&limit=" . $i * $CONF['page_size'] . "#MidArrow\">" . $limit['mbox_pgindex'][$i] . "</a>\n";
      }
   }
   print "</td><td valign=middle align=right>";

   if ($tDisplay_back_show == 1)
   {
      print "<a href=\"$file?domain=$fDomain&limit=$tDisplay_back#MidArrow\"><img border=\"0\" src=\"images/arrow-l.png\" title=\"" . $PALANG['pOverview_left_arrow'] . "\" alt=\"" . $PALANG['pOverview_left_arrow'] . "\" /></a>\n";
   }
   if ($tDisplay_up_show == 1)
   {
      print "<a href=\"$file?domain=$fDomain&limit=0#MidArrow\"><img border=\"0\" src=\"images/arrow-u.png\" title=\"" . $PALANG['pOverview_up_arrow'] . "\" alt=\"" . $PALANG['pOverview_up_arrow'] . "\" /></a>\n";
   }
   if ($tDisplay_next_show == 1)
   {
      print "<a href=\"$file?domain=$fDomain&limit=$tDisplay_next#MidArrow\"><img border=\"0\" src=\"images/arrow-r.png\" title=\"" . $PALANG['pOverview_right_arrow'] . "\" alt=\"" . $PALANG['pOverview_right_arrow'] . "\" /></a>\n";
   }
   print "</td></tr></table></div>\n";

   $colspan=8;
   if ($CONF['vacation_control_admin'] == 'YES') $colspan=$colspan+1;
   if ($CONF['alias_control_admin'] == 'YES') $colspan=$colspan+1;
   if ($display_mailbox_aliases)              $colspan=$colspan+1;

#   print "<table id=\"mailbox_table\">\n";
   print "<div class=\"container-fluid\"><table id=\"mailbox_table\" class=\"table table-striped table-hover Usertable table-bordered\">\n";


   print "   <tr>\n";
   print "      <td colspan=\"$colspan\"><caption><h3>" . $PALANG['pOverview_mailbox_title'] . "</h3></caption></td>";
   print "   </tr>";
   print "   <tr>\n";
   if ($CONF['show_status'] == 'YES') { print "<td></td>\n"; }
   print "      <td>" . $PALANG['pOverview_mailbox_domain'] . "</td>\n";
   print "      <td>" . $PALANG['pOverview_mailbox_username'] . "</td>\n";
   if ($display_mailbox_aliases) print "      <td>" . $PALANG['pOverview_alias_goto'] . "</td>\n";
   print "      <td>" . $PALANG['pOverview_mailbox_name'] . "</td>\n";
   if ($CONF['quota'] == 'YES') print "      <td>" . $PALANG['pOverview_mailbox_quota'] . "</td>\n";
   print "      <td>" . $PALANG['pOverview_mailbox_modified'] . "</td>\n";
   $colspan = $colspan - 6;
   print "      <td colspan=\"$colspan\">&nbsp;</td>\n";
   print "   </tr>\n";

   for ($i = 0; $i < sizeof ($tMailbox); $i++)
   {
      if ((is_array ($tMailbox) and sizeof ($tMailbox) > 0))
      {
         print "   <tr class=\"hilightoff\" onMouseOver=\"className='hilighton';\" onMouseOut=\"className='hilightoff';\">\n";

         print "      <td>" . $tMailbox[$i]['domain'] . "</td>\n";

         if ($CONF['show_status'] == 'YES')
         {
             print "  <td>" . gen_show_status($tMailbox[$i]['username']) . "</td>\n";
         }

         print "      <td>" . searchhl($tMailbox[$i]['username']) . "</td>\n";

         if ($display_mailbox_aliases) {
            # print "      <td>" . searchhl($tMailbox[$i]['goto']) . "</td>\n";
            print "      <td>";
            if ($tMailbox[$i]['goto_mailbox'] == 1) {
               print "Mailbox"; # TODO: make translatable
            } else {
               print "Forward only"; # TODO: make translatable
            }
            if (count($tMailbox[$i]['goto_other']) > 0) print "<br>";
            print searchhl(join("<br>", $tMailbox[$i]['goto_other'])); # TODO: honor $CONF['alias_goto_limit']
            print "</td>\n";
         }


         print "      <td>" . htmlentities($tMailbox[$i]['name']) . "</td>\n";
         if ($CONF['quota'] == 'YES')
         {
            print "      <td>";
            if ($tMailbox[$i]['quota'] == 0)
            {
               print $PALANG['pOverview_unlimited'];
            }
            elseif ($tMailbox[$i]['quota'] < 0)
            {
               print $PALANG['pOverview_disabled'];
            }
            else
            {
               if (boolconf('used_quotas'))
                  print divide_quota ($tMailbox[$i]['current']).'/';
               print divide_quota ($tMailbox[$i]['quota']);
            }
            print "</td>\n";
         }
         print "      <td>" . $tMailbox[$i]['modified'] . "</td>\n";

         if ($CONF['vacation_control_admin'] == 'YES' && $CONF['vacation'] == 'YES')
         {
            $v_active_int = $tMailbox[$i]['v_active'];
            if($v_active_int !== -1) {
               if($v_active_int == 1) {
                  $v_active = $PALANG['pOverview_vacation_edit'];
               }
               else {
                  $v_active = $PALANG['pOverview_vacation_option'];
               }
               print "<td><a href=\"edit-vacation.php?username=" . urlencode ($tMailbox[$i]['username']) . "&domain=$fDomain" . "\">" . $v_active . "</a></td>\n";
            }
            else {
               // can't tell vacation state - broken pgsql query
               echo "<td> &nbsp; </td>\n";
            }
         }

         $edit_aliases=0;
         if ( (! authentication_has_role('global-admin')) && $CONF['alias_control_admin'] == 'YES') $edit_aliases = 1;
         if (    authentication_has_role('global-admin')  && $CONF['alias_control'] == 'YES') $edit_aliases = 1;

         if ($edit_aliases == 1)
         {
            print "      <td><a href=\"edit-alias.php?address=" . urlencode ($tMailbox[$i]['username']) . "\">" . $PALANG['pOverview_alias_edit'] . "</a></td>\n";
         }

        print "      <td><a href=\"edit-mailbox.php?username=" . urlencode ($tMailbox[$i]['username']). "&domain="  . urlencode ($tMailbox[$i]['domain']) . "\">" . $PALANG['edit'] . "</a></td>\n";
 
         print "      <td><a href=\"delete.php?table=mailbox" . "&delete=" . urlencode ($tMailbox[$i]['username']) . "&domain="  . urlencode ($tMailbox[$i]['domain']) . "\"onclick=\"return confirm ('" . $PALANG['confirm'] . $PALANG['pOverview_get_mailboxes'] . ": ". $tMailbox[$i]['username'] . "')\">" . $PALANG['del'] . "</a></td>\n";
         print "   </tr>\n";
      }
   }
   print "</table></div>\n";
   print "<div id=\"nav_bar\"><a name=\"LowArrow\" /a>\n";
   if ($tDisplay_back_show == 1)
   {
      print "<a href=\"$file?domain=$fDomain&limit=$tDisplay_back#LowArrow\"><img border=\"0\" src=\"images/arrow-l.png\" title=\"" . $PALANG['pOverview_left_arrow'] . "\" alt=\"" . $PALANG['pOverview_left_arrow'] . "\" /></a>\n";
   }
   if ($tDisplay_up_show == 1)
   {
      print "<a href=\"$file?domain=$fDomain&limit=0#LowArrow\"><img border=\"0\" src=\"images/arrow-u.png\" title=\"" . $PALANG['pOverview_up_arrow'] . "\" alt=\"" . $PALANG['pOverview_up_arrow'] . "\" /></a>\n";
   }
   if ($tDisplay_next_show == 1)
   {
      print "<a href=\"$file?domain=$fDomain&limit=$tDisplay_next#LowArrow\"><img border=\"0\" src=\"images/arrow-r.png\" title=\"" . $PALANG['pOverview_right_arrow'] . "\" alt=\"" . $PALANG['pOverview_right_arrow'] . "\" /></a>\n";
   }
   print "</div>\n";

}
if($tCanAddMailbox) {
   print "<p><a href=\"create-mailbox.php?domain=$fDomain\">" . $PALANG['pMenu_create_mailbox'] . "</a>\n";
}

if ($CONF['show_status'] == 'YES' && $CONF['show_status_key'] == 'YES')
{
  print "<br><br>";
  if  ($CONF['show_undeliverable'] == 'YES')
  {
     print "&nbsp;<span style='background-color:" . $CONF['show_undeliverable_color'] .
                        "'>" . $CONF['show_status_text'] . "</span>=" . $PALANG['pStatus_undeliverable'] . "\n";
  }
  if  ($CONF['show_popimap'] == 'YES')
  {
     print "&nbsp;<span style='background-color:" . $CONF['show_popimap_color'] .
                        "'>" . $CONF['show_status_text'] . "</span>=" . $PALANG['pStatus_popimap'] . "\n";
  }
  if ( count($CONF['show_custom_domains']) > 0 )
  {
    for ($i = 0; $i < sizeof ($CONF['show_custom_domains']); $i++)
    {
        print "&nbsp;<span  style='background-color:" . $CONF['show_custom_colors'][$i] . "'>" .
            $CONF['show_status_text'] . "</span>=" . $PALANG['pStatus_custom'] . 
            $CONF['show_custom_domains'][$i] . "\n";
    }
  }
}

/* vim: set ft=php expandtab softtabstop=3 tabstop=3 shiftwidth=3: */
?>





<div class="container-fluid">

<table id="mailbox_table" class="table table-striped table-hover Usertable table-bordered">
	<tr><td colspan="3"><caption><h3>:: Firewall</h3><caption></td></tr>
	<tr>
		<td>Port</td>
		<td>Rule</td>
		<td>From</td>
	</tr>
	<?php
	$file = file('/tmp/ufw');
	foreach ($file as $index => $line) {
		$line = trim($line);
		if ($index < 4 || !$line) {
			continue;
		}
		$line = preg_split('/\s+/', $line);
		?>
		<tr>
			<td><?php echo $line[0] ?></td>
			<td><?php echo $line[1] ?></td>
			<td>
				<?php
				if ($line[2] == 'Anywhere') {
					echo 'Anywhere';
				}
				else {
					echo 'Local Only (' . $line[2] . ')';
				}
				?>
			</td>
		</tr>
		<?php
	}
	?>
</table></div>
<br>

<?php

//all below created by shawn

//$externalContent = file_get_contents('http://checkip.dyndns.com/');
//preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
//$externalIp = $m[1];


print "<div class=\"container-fluid\"><table class=\"table table-striped table-hover Usertable table-bordered\">\n";
#print "<table id=\"mailbox_table\">\n";
   print "   <tr>\n";
   //print "      <td colspan=\"8\"><caption><h3>" . $PALANG['pOverview_handshake_title'] . "&nbsp;&nbsp;&nbsp;:" . base64_encode($externalIp) ."</h3></td>";
   print "      <td colspan=\"8\"><caption><h3>" . $PALANG['pOverview_handshake_title'] . "</caption></h3></td>";
   print "   </tr>";

	print "   <tr>\n";
 	print "      <td>" . $PALANG['pOverview_handshake_address'] . "</td>\n";
   	print "      <td>" . $PALANG['pOverview_handshake_name'] . "</td>\n";
 	print "      <td>" . $PALANG['pOverview_handshake_ip'] . "</td>\n";
	print "      <td>" . $PALANG['pOverview_handshake_modified'] . "</td>\n";
        print "      <td colspan=\"$colspan\">&nbsp;</td>\n";
        print "   </tr>\n";

		//lines above define the Fields and tabled for ::Handshakes			
	$query = sprintf("Select * from handshake");
	$result = db_query($query);
   if ($result['rows'] > 0)
   {
      while ($row = db_array ($result['result']))
      {
         $tHandshake[] = $row;
      }
   }

   for ($i = 0; $i < sizeof ($tHandshake); $i++)
   {
      if ((is_array ($tHandshake) and sizeof ($tHandshake) > 0))
      {
         print "   <tr>\n";
         print "      <td>" . $tHandshake[$i]['domain'] . "</td>\n";
			$destination = substr($tHandshake[$i]['destination'], 1, -1);
			$destination = base64_encode($destination);
			$destination = base64_decode($destination);
         //print "      <td>" . searchhl($destination) . "</td>\n";
	 print "      <td>" . $destination . "</td>\n";
         print "      <td>" . htmlentities($tHandshake[$i]['description']) . "</td>\n";
         print "      <td>" . $tHandshake[$i]['modified'] . "</td>\n";


         $edit_aliases=0;
         if ( (! authentication_has_role('global-admin')) && $CONF['alias_control_admin'] == 'YES') $edit_aliases = 1;
         if (    authentication_has_role('global-admin')  && $CONF['alias_control'] == 'YES') $edit_aliases = 1;

         print "      <td><a href=\"edit-handshake.php?handshake=" . urlencode ($tHandshake[$i]['domain']) . "\">" . $PALANG['edit'] . "</a></td>\n";

         print "      <td><a href=\"edit-handshake.php?delete=yes" . "&From=" . urlencode ($tHandshake[$i]['domain']) . "\"onclick=\"return confirm ('" . $PALANG['confirm'] . $PALANG['pOverview_get_handshake'] . ": ". $tHandshake[$i]['domain'] . "')\">" . $PALANG['del'] . "</a></td>\n";
       print "   </tr>\n";

      }
   }
   print "</table></div>\n";
if($tCanAddAlias) {
   print "<p><a href=\"create-handshake.php?new=Y3s\">" . $PALANG['pAdminMenu_create_handshake'] . "</a>\n";
}

