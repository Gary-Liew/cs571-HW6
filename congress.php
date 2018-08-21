<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Congress Information Search</title>
    <style type="text/css">
      .all {
        margin: auto;
      }
        table.table1{
            position:relative;
            top:-70px;
        } 
        
        .noinput{
            position:relative;
            top:-40px;
        }
        
        .noinput1{
            position:relative;
            top:-40px;
        }
        
        table.table2{
            position:relative;
            top:-30px;
            border-collapse: collapse;
            width:50%;
        }
        
        table.table3{
            position:relative;
            top:-40px;
            width:60%;
        }
        
        .noresult{
            position:relative;
            top:-40px;
        }
        
        table.anothertable{
            position:relative;
            top:-30px;
            border-collapse: collapse;
            width:50%;
        }
        
        .noresult1{
            position:relative;
            top:-40px;
        }
        
        table.anothertable1{
            position:relative;
            top:-30px;
            border-collapse: collapse;
            width:50%;
        }
        
        table.table4{
            position:relative;
            top:-40px;
            width:60%;
        }
        
        .noresult2{
            position:relative;
            top:-40px;
        }
        
        table.anothertable2{
            position:relative;
            top:-30px;
            border-collapse: collapse;
            width:50%;
        }
    </style>

<script>
  function myFunction(){
      var x=document.getElementById("congressData").value;
      if(x=="legislators"){
         document.getElementById("change").innerHTML="State/Representative*";
      }
      else if(x=="committees"){
          document.getElementById("change").innerHTML="Committee ID*";
      }
      else if(x=="bills"){
          document.getElementById("change").innerHTML="Bill ID*";
      }
      else if(x=="amendments"){
          document.getElementById("change").innerHTML="Amendment ID*";
      }
      else{
          document.getElementById("change").innerHTML="Keyword*";
      }
  }
    
  function clearResult(){
    var form = document.getElementById('myForm');
    form.congressData.selectedIndex = 0;
    form.senate.checked = true;
    form.keyword.value = '';
    document.getElementById("change").innerHTML="Keyword*";
    var result = document.getElementById('congressResult');
    result.innerHTML = '';
    return true;
  }
    
var validate = function(){
	var keyword = document.getElementById('keyword'); 
  	var congressData = document.getElementById('congressData');

	if (keyword.value == "" && congressData.value == "default") {
		alert('Please enter the following missing information:Congress Database,keyword');
        return false;
	}
	else if (congressData.value == "default") {
		alert('Please choose value for congress database');
        return false;
	}
	else if (keyword.value == "") {
		alert('Please enter value the following missing information:keyword'); return false;
	}
	return true;
}
    function loadDetails(x,y,z,a,b,c,d,e,f){
         document.getElementById('congressResult').innerHTML="";
        if(x==0){
            var html = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><title></title><body>";
            html+= '<div style="text-align:center;" class="noinput1">';
            html+="<h4>The API returned zero results for the request</h4>";
            html+="</div></body></html>"
            document.getElementById("congressResult").innerHTML = html;
           }
        else{
            var html = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><title></title><body>";
            html += "<table class='table3' align='center' style='text-align:center;' frame='box'>"; 
            html += "<tr>";
            html += "<td colspan=2>";
            html += "<img class=show src="+y+">";
            html += "</td>";
            html += "</tr>";
            html += "<tr><td><strong>";
            html += "Full Name";
            html += "</strong></td>";
            html += "<td>"
            html += z;
            html += "</td>";
            html += "</tr>";
            html += "<tr><td><strong>";
            html += "Terms Ends on";
            html += "</strong></td>";
            html += "<td>"
            html += a;
            html += "</td>";
            html += "</tr>";
            html += "<tr><td><strong>";
            html += "Website";
            html += "</strong></td>";
            html += "<td>"
            if(b==' '){
            html += 'NA';
            }
            else{
            html += "<a href="+b+">";
            html += b;
            html += "</a>";
            }
            html += "</td>";
            html += "</tr>";
            html += "<tr><td><strong>";
            html += "Office";
            html += "</strong></td>";
            html += "<td>"
            html += c;
            html += "</td>";
            html += "</tr>";
            html += "<tr><td><strong>";
            html += "Favebook";
            html += "</strong></td>";
            html += "<td>"
            if(d==' '){
            html += 'NA';
            }
            else{
            html += "<a href="+d+">";
            html += e;
            html += "</a>";
            }
            html += "</td>";
            html += "</tr>";
            html += "<tr><td><strong>";
            html += "Twitter";
            html += "</strong></td>";
            html += "<td>"
            if(f==' '){
            html += 'NA';
            }
            else{
            html += "<a href="+f+">";
            html += e;
            html += "</a>";
            }
            html += "</td>";
            html += "</tr>";
            html += "</table>";
            html += "</html>";
            document.getElementById("congressResult").innerHTML = html;
            }
      }
    
    function detailsofBill(a,b,c,d,e,f){
        document.getElementById('congressResult').innerHTML="";
        var html = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><title></title><body>";
        html += "<table class='table4' align='center' style='text-align:center;' frame='box'>"; 
        html += "<tr><td><strong>";
        html += "Bill ID";
        html += "</strong></td>";
        html += "<td>"
        html += a;
        html += "</td>";
        html += "</tr>";
        html += "<tr><td><strong>";
        html += "Bill Title";
        html += "</strong></td>";
        html += "<td>"
        html += b;
        html += "</td>";
        html += "</tr>";
        html += "<tr><td><strong>";
        html += "Sponsor";
        html += "</strong></td>";
        html += "<td>"
        html += c;
        html += "</td>";
        html += "</tr>";
        html += "<tr><td><strong>";
        html += "Introduced On";
        html += "</strong></td>";
        html += "<td>"
        html += d;
        html += "</td>";
        html += "</tr>";
        html += "<tr><td><strong>";
        html += "Last action with date";
        html += "</strong></td>";
        html += "<td>"
        html += e;
        html += "</td>";
        html += "</tr>";
        html += "<tr><td><strong>";
        html += "Bill URL";
        html += "</strong></td>";
        html += "<td>"
        html += "<a href="+f+">";
        html += b;
        html += "</a>";
        html += "</td>";
        html += "</tr>";
        html += "</table>";
        html += "</html>";
        document.getElementById("congressResult").innerHTML = html;
    }
</script>

</head>
<body>
    <h2 style="text-align: center;">Congress Information Search</h2>
    <table align="center" style="text-align:center;" class='table1' frame="box">
      <form method="post" action="congress.php" id="myForm" onSubmit=" return validate()">
        <div class="all">
        <div class="first">
        <tr><td>Congress Database</td>
        <td>
        <select id="congressData" name="congressData" onchange="myFunction()">
        <?php
        if(isset($_POST['congressData'])){
        $congressData = $_POST['congressData'];
        if($congressData=='legislators'){
        echo'<option value="default" disabled>Select your option</option>';
        echo'<option value="legislators" selected>Legislators</option>';
        echo'<option value="committees">Committees</option>';
        echo'<option value="bills">Bills</option>';
        echo'<option value="amendments">Amendments</option>';
        }
        else if($congressData=='committees'){
        echo'<option value="default" disabled>Select your option</option>';
        echo'<option value="legislators">Legislators</option>';
        echo'<option value="committees" selected>Committees</option>';
        echo'<option value="bills">Bills</option>';
        echo'<option value="amendments">Amendments</option>';
        }
        else if($congressData=='bills'){
        echo'<option value="default" disabled>Select your option</option>';
        echo'<option value="legislators">Legislators</option>';
        echo'<option value="committees">Committees</option>';
        echo'<option value="bills" selected>Bills</option>';
        echo'<option value="amendments">Amendments</option>';
        }
        else {
        echo'<option value="default" disabled>Select your option</option>';
        echo'<option value="legislators">Legislators</option>';
        echo'<option value="committees">Committees</option>';
        echo'<option value="bills">Bills</option>';
        echo'<option value="amendments" selected>Amendments</option>';
        }
        } else {  
        echo'<option value="default" disabled selected>Select your option</option>';
        echo'<option value="legislators">Legislators</option>';
        echo'<option value="committees">Committees</option>';
        echo'<option value="bills">Bills</option>';
        echo'<option value="amendments">Amendments</option>';
        }
        ?>
        </select>
        </td></tr>
        </div>
        <br>

        <div class="second">
        <tr><td>Chamber</td>
        <td>
        <?php
if (isset($_POST['chamber']) && $_POST['chamber'] == 'house') {
  echo '<input id="senate" type="radio" name="chamber" value="senate">Senate<input id="house" type="radio" name="chamber" value="house" checked>House';
} else {
  echo '<input id="senate" type="radio" name="chamber" value="senate" checked>Senate <input id="house" type="radio" name="chamber" value="house">House';
}
        ?>
        </td></tr>
        </div>
        <br>
            
        <div class="third">
            <tr><td><div id="change"><?php 
                if(isset($_POST['congressData'])){
                $congressData = $_POST['congressData'];
                if($congressData=='legislators'){
                echo'State/Representative*';
                }
                else if($congressData=='committees'){
                echo'Committee ID*';
                }
                else if($congressData=='bills'){
                echo'Bill ID*';
                }
                else {
                echo'Amendment ID*';
                }
                }
                else{
                echo'Keyword*';
                }
                ?></div></td>
        <td>
        <input id="keyword" type="text" name="keyword" value="<?php echo (isset($_POST['keyword']) ? htmlspecialchars($_POST['keyword']) : ''); ?>">
        </td></tr>
        </div>
        <br>
        
        <div class="forth">
            <tr><td></td>
            <td>
          <input type="submit" value="Search";>
          <input type="button" value="Clear" onclick="clearResult();">
            </td></tr>
        </div>
        <br>
            
        <div class="fifth">
            <tr><td colspan=2>
        <a href="http://sunlightfoundation.com/" target="_blank">Powered by Sunlight Foundation</a>
                </td></tr>
        </div>
        </div><!-- all -->

      </form>
    </table>
</body>

<?php
  if (isset($_POST['congressData'])) {
    $congressData = $_POST['congressData'];
    $chamber=$_POST['chamber'];
    $keyword=$_POST['keyword']; 
    $apikey='940ad24d3ed74f74837c42afc69c9767';
    echo'<div id="congressResult">';
    if($congressData=='legislators'){
            $keyword = strtolower($keyword);
            $legislatorurl;
            if($keyword=='alabama'){
            $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=AL&apikey='.$apikey;
            }
            else if($keyword=='alaska'){
                $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=AK&apikey='.$apikey;
            }
            else if($keyword=='arizona'){
                $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=AZ&apikey='.$apikey;
           }
           else if($keyword=='arkansas'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=AR&apikey='.$apikey;
           }
           else if($keyword=='california'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=CA&apikey='.$apikey;
           }
           else if($keyword=='colorado'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=CO&apikey='.$apikey;
           }
           else if($keyword=='connecticut'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=CT&apikey='.$apikey;
           }
           else if($keyword=='delaware'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=DE&apikey='.$apikey;
           }
           else if($keyword=='district Of columbia'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=DC&apikey='.$apikey;
           }
           else if($keyword=='florida'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=FL&apikey='.$apikey;
           }
           else if($keyword=='hawaii'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=HI&apikey='.$apikey;
           }
           else if($keyword=='georgia'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=GA&apikey='.$apikey;
           }
           else if($keyword=='idaho'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=ID&apikey='.$apikey;
           }
           
           else if($keyword=='illinois'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=IL&apikey='.$apikey;
           }
           else if($keyword=='indiana'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=IN&apikey='.$apikey;
           }
           else if($keyword=='iowa'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=IA&apikey='.$apikey;
           }
           else if($keyword=='kansas'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=KS&apikey='.$apikey;
           }
           else if($keyword=='kentucky'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=KY&apikey='.$apikey;
           }
           else if($keyword=='louisiana'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=LA&apikey='.$apikey;
           }
           else if($keyword=='maine'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=ME&apikey='.$apikey;
           }
           else if($keyword=='maryland'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=MD&apikey='.$apikey;
           }
           else if($keyword=='massachusetts'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=MA&apikey='.$apikey;
           }
           else if($keyword=='michigan'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=MI&apikey='.$apikey;
           }
           else if($keyword=='minnesota'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=MN&apikey='.$apikey;
           }
           else if($keyword=='mississippi'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=MS&apikey='.$apikey;
           }
           else if($keyword=='missouri'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=MO&apikey='.$apikey;
           }
           else if($keyword=='montana'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=MT&apikey='.$apikey;
           }
           else if($keyword=='nebraska'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=NE&apikey='.$apikey;
           }
           else if($keyword=='nevada'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=NV&apikey='.$apikey;
           }
           else if($keyword=='new hampshire'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=NH&apikey='.$apikey;
           }
           else if($keyword=='new jersey'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=NJ&apikey='.$apikey;
           }
           else if($keyword=='new mexico'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=NM&apikey='.$apikey;
           }
          else if($keyword=='new york'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=NY&apikey='.$apikey;
           }
           else if($keyword=='north carolina'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=NC&apikey='.$apikey;
           }
           else if($keyword=='north dakota'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=ND&apikey='.$apikey;
           }
           else if($keyword=='ohio'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=OH&apikey='.$apikey;
           }
           else if($keyword=='oklahoma'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=OK&apikey='.$apikey;
           }
           else if($keyword=='oregon'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=OR&apikey='.$apikey;
           }
           else if($keyword=='pennsylvania'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=PA&apikey='.$apikey;
           }
           else if($keyword=='rhode island'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=RI&apikey='.$apikey;
           }
           else if($keyword=='south carolina'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=SC&apikey='.$apikey;
           }
           else if($keyword=='south dakota'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=SD&apikey='.$apikey;
           }
           else if($keyword=='tennessee'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=TN&apikey='.$apikey;
           }
           else if($keyword=='texas'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=TX&apikey='.$apikey;
           }
           else if($keyword=='utah'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=UT&apikey='.$apikey;
           }
           else if($keyword=='vermont'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=VT&apikey='.$apikey;
           }
           else if($keyword=='virginia'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=VA&apikey='.$apikey;
           }
           else if($keyword=='washington'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=WA&apikey='.$apikey;
           }
           else if($keyword=='west virginia'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=WV&apikey='.$apikey;
           }
           else if($keyword=='wisconsin'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=WI&apikey='.$apikey;
           }
           else if($keyword=='wyoming'){
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state=WY&apikey='.$apikey;
           }
           else {
               $pieces = explode(" ",$keyword);
               $count = count($pieces);
                if($count==1) {
               $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&query='.$keyword.'&apikey='.$apikey;
                }
               else{
                   $first=ucfirst($pieces[0]);
                   $last=ucfirst($pieces[1]);
                   $legislatorurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&first_name='.$first.'&last_name='.$last.'&apikey='.$apikey;

               }
           }
           $congressResponse=file_get_contents($legislatorurl);
           $congressJson=json_decode($congressResponse,true);
           $congressCount=$congressJson['count'];
           if($congressCount=='0'){
               echo '<div class="noinput">';
               echo '<h4 style="text-align:center;">';
               echo 'The API returned zero results for the request';
               echo '</h4>';
               echo '</div>';
           }
           else{
           echo '<table border="1" align="center" style="text-align:center;" class="table2">';
           echo '<tr><td><strong>';
           echo 'Name';
           echo '</strong></td><td><strong>';
           echo 'State';
           echo '</strong></td><td><strong>';
           echo 'Chamber';
           echo '</strong></td><td><strong>';
           echo 'Details';
           echo '</strong></td></tr>';
           for($i=0;$i<count($congressJson['results']);$i++){
               echo'<tr>';
               echo'<td>';
               $firstname=$congressJson['results'][$i]['first_name'];
               $lastname=$congressJson['results'][$i]['last_name'];
               echo $firstname;
               echo ' ';
               echo $lastname;
               echo'</td>';
               echo'<td>';
               $statename=$congressJson['results'][$i]['state_name'];
               echo $statename;
               echo'</td>';
               echo'<td>';
               $chambers=$congressJson['results'][$i]['chamber'];
               echo $chambers;
               echo'</td>';
               echo'<td>';
               $state=$congressJson['results'][$i]['state'];
               $bioguideid=$congressJson['results'][$i]['bioguide_id'];
               $anotherurl='http://congress.api.sunlightfoundation.com/legislators?chamber='.$chamber.'&state='.$state.'&bioguide_id='.$bioguideid.'&apikey='.$apikey;
               $anotherResponse=file_get_contents($anotherurl);
               $anotherJson=json_decode($anotherResponse,true);
               $anotherCount=$anotherJson['count'];
               $img='http://theunitedstates.io/images/congress/225x275/'.$bioguideid.'.jpg';
               $s=0;
               $first_name=$anotherJson['results'][$s]['first_name'];
               $last_name=$anotherJson['results'][$s]['last_name'];
               $fullname;
               if(isset($anotherJson['results'][$s]['title'])){
               $title1=$anotherJson['results'][$s]['title'];
               $fullname=$title1.' '.$first_name.' '.$last_name;
               }
               else{
                   $fullname=$first_name.' '.$last_name;
               }
               $termends=$anotherJson['results'][$s]['term_end'];
               $website;
               if(isset($anotherJson['results'][$s]['website'])){
               $website=$anotherJson['results'][$s]['website'];
               }
               else{
                   $website=' ';
               }
               $office=$anotherJson['results'][$s]['office'];
               $facebook;
               if(isset($anotherJson['results'][$s]['facebook_id'])){
               $facebookid=$anotherJson['results'][$s]['facebook_id'];
               $facebook='https://www.facebook.com/'.$facebookid;
               }
               else{
                   $facebook=' ';
               }
               $twitter;
               if(isset($anotherJson['results'][$s]['twitter_id'])){
               $twitterid=$anotherJson['results'][$s]['twitter_id'];
               $twitter='https://twitter.com/'.$twitterid;
               }
               else{
                   $twitter=' ';
               }
               $name=$first_name.' '.$last_name;
               echo '<a href="javascript:loadDetails('."'".$anotherCount."'".','."'".$img."'".','."'".$fullname."'".','."'".$termends."'".','."'".$website."'".','."'".$office."'".','."'".$facebook."'".','."'".$name."'".','."'".$twitter."'".')">View Details</a>';
               echo'</td>';
               echo'</tr>';
           }
           echo '</table>';
           }
           }
      else if($congressData=='committees'){
           $keyword = strtoupper($keyword);
           $committeeurl;
           $committeeurl='http://congress.api.sunlightfoundation.com/committees?committee_id='.$keyword.'&chamber='.$chamber.'&apikey='.$apikey;
           $committeeResponse=file_get_contents($committeeurl);
           $committeeJson=json_decode($committeeResponse,true);
           $committeeCount=$committeeJson['count'];
           if($committeeCount=='0'){
               echo '<div class="noresult">';
               echo '<h4 style="text-align:center;">';
               echo 'The API returned zero results for the request';
               echo '</h4>';
               echo '</div>';
           }
          else{
              echo '<table border="1" align="center" style="text-align:center;" class="anothertable">';
              echo '<tr><td><strong>';
              echo 'Committee ID';
              echo '</strong></td><td><strong>';
              echo 'Committee Name';
              echo '</strong></td><td><strong>';
              echo 'Chamber';
              echo '</strong></td></tr>';
              echo '<tr><td>';
              $k=0;
              $committeeID=$committeeJson['results'][$k]['committee_id'];
              echo $committeeID;
              echo '</td><td>';
              $committeeName=$committeeJson['results'][$k]['name'];
              echo $committeeName;
              echo '</td><td>';
              $chamber=$committeeJson['results'][$k]['chamber'];
              echo $chamber;
              echo '</td></tr></table>';
          }    
      }
      else if($congressData=='bills'){
          $keyword = strtolower($keyword);
          $billurl;
          $billurl='http://congress.api.sunlightfoundation.com/bills?bill_id='.$keyword.'&chamber='.$chamber.'&apikey='.$apikey;
          $billResponse=file_get_contents($billurl);
          $billJson=json_decode($billResponse,true);
          $billCount=$billJson['count'];
          if($billCount=='0'){
               echo '<div class="noresult1">';
               echo '<h4 style="text-align:center;">';
               echo 'The API returned zero results for the request';
               echo '</h4>';
               echo '</div>';
           }
          else{
              echo '<table border="1" align="center" style="text-align:center;" class="anothertable1">';
              echo '<tr><td><strong>';
              echo 'Bill ID';
              echo '</strong></td><td><strong>';
              echo 'Short Title';
              echo '</strong></td><td><strong>';
              echo 'Chamber';
              echo '</strong></td><td><strong>';
              echo 'Details';
              echo '</strong></td></tr>';
              echo '<tr><td>';
              $a=0;
              $billID=$billJson['results'][$a]['bill_id'];
              echo $billID;
              echo '</td><td>';
              $shorttitle=$billJson['results'][$a]['short_title'];
              echo $shorttitle;
              echo '</td><td>';
              $chamber=$billJson['results'][$a]['chamber'];
              echo $chamber;
              echo '</td><td>';
              $firstname=$billJson['results'][$a]['sponsor']['first_name'];
              $lastname=$billJson['results'][$a]['sponsor']['last_name'];
              if(isset($billJson['results'][$a]['sponsor']['title'])){
               $title=$billJson['results'][$a]['sponsor']['title'];
               $fullname=$title.' '.$firstname.' '.$lastname;
               }
               else{
                   $fullname=$first_name.' '.$last_name;
               }
              $introduced=$billJson['results'][$a]['introduced_on'];
              $version=$billJson['results'][$a]['last_version']['version_name'];
              $lastaction=$billJson['results'][$a]['last_action_at'];
              $action=$version.','.$lastaction;
              $billurl=$billJson['results'][$a]['last_version']['urls']['pdf'];
              echo '<a href="javascript:detailsofBill('."'".$billID."'".','."'".$shorttitle."'".','."'".$fullname."'".','."'".$introduced."'".','."'".$action."'".','."'".$billurl."'".')">View Details</a>';
              echo'</td>';
              echo'</tr>';
              echo '</table>';
              
          }
      }
      else{
          $keyword = strtolower($keyword);
          $amendmenturl;
          $amendmenturl='http://congress.api.sunlightfoundation.com/amendments?amendment_id='.$keyword.'&chamber='.$chamber.'&apikey='.$apikey;
          $amendmentResponse=file_get_contents($amendmenturl);
          $amendmentJson=json_decode($amendmentResponse,true);
          $amendmentCount=$amendmentJson['count'];
          if($amendmentCount=='0'){
               echo '<div class="noresult2">';
               echo '<h4 style="text-align:center;">';
               echo 'The API returned zero results for the request';
               echo '</h4>';
               echo '</div>';
           }
          else{
              echo '<table border="1" align="center" style="text-align:center;" class="anothertable2">';
              echo '<tr><td><strong>';
              echo 'Amendment ID';
              echo '</strong></td><td><strong>';
              echo 'Amendment Type';
              echo '</strong></td><td><strong>';
              echo 'Chamber';
              echo '</strong></td><td><strong>';
              echo 'Introduced on';
              echo '</strong></td></tr>';
              echo '<tr><td>';
              $b=0;
              $amendmentID=$amendmentJson['results'][$b]['amendment_id'];
              echo $amendmentID;
              echo '</td><td>';
              $amendmentType=$amendmentJson['results'][$b]['amendment_type'];
              echo $amendmentType;
              echo '</td><td>';
              $chamber=$amendmentJson['results'][$b]['chamber'];
              echo $chamber;
              echo '</td><td>';
              $introduce=$amendmentJson['results'][$b]['introduced_on'];
              echo $introduce;
              echo '</td></tr></table>';
          }
      }
           echo '</div>';
  }
?>   
</html>
