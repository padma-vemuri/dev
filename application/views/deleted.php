<table  class="curvedEdges" style = "position:absolute; top:260px;table-layout:fixed; "  >
  <tr style="background-color:lightblue;white-space:nowrap;text-align:left;">
    
    <th>Date</th>
    <th>Issue Number</th>
    <th>GBP</th>
    <th>Project Name </th>
    <th>Application</th>    
    <th>Priority</th>  
    <th>DB/FE</th>
    <th>Database</th>
    <th>Supported DB </th>
    <th>Analyst</th>
    <th>Status</th>
    <th>Last Updated By (PST)</th>
    <th>Release Related</th>    
    <th>Summary</th>
    <th>Recommendations</th>
    <th>Case/PBI</th>    
      
  </tr>

<?php 
error_reporting(0);
$view ='VI';
foreach($query as $row){

    
  echo "<tr class =\"hover\" style=\"border:0px;\">";

    //echo "<td> <a id='link' href=''>Edit</a></td>"

    echo "<td style='width:60px;'>". $row->IssueReportedDate ."</td>";
 	//echo "<td>". $row->CaseNo ."</td>";  

 	echo  "<td  >"."<a href='' style=\"color:blue;\" onclick =\"javascript: window.open('view/".$incnumber."', 'window_name', 'width = 250, height = 250,scrollbars=yes');\">Audit</a>".$row->CaseNo."</td>"; 
  echo "<td style='word-wrap:break-word;'>". $row->GBP ."</td>";
  echo "<td style='word-wrap:break-word;'>". $row->Project ."</td>";
  echo "<td style='word-wrap:break-word;'>". $row->Application ."</td>";
 	echo "<td style='word-wrap:break-word;' >". $row->Priority ."</td>";
 	echo "<td   style='text-align:center;'>". $row->DBFE ."</td>";
 	echo "<td style='word-wrap:break-word;' >". $row->Database ."</td>";  
 	echo "<td  style='text-align:center;'>". $row->SupportedDB ."</td>";
 	echo "<td >". $row->Analyst ."</td>";
 	echo "<td >". $row->Status."</td>";
  echo "<td >". $row->LastUpdatedDate."</td>";
 	echo "<td  style='text-align:center;'>". $row->ReleaseRelated ."</td>";  
 	echo "<td style='word-wrap:break-word;' >".$row->Summary."</td>"; 
  echo "<td style='word-wrap:break-word;' >".  $row->Recommendations."</td>";
 	echo "<td style='text-align:center;'>". $row->CasePBI ."</td>";



  echo "</tr>";   

}

?>
</table>
