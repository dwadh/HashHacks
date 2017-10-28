<?php session_start();

function companyDetails($id){
    
   $result=json_decode(exec('python loadcomp.py '.$id),true);
   
    
        list($id,$name,$desc, $req, $left, $trans, $logo, $conf, $succ)=explode("#",$result[0]);
        
        $id =$id;
        $name=$name;
        $desc = $desc;
        $req = $req;
        $left = $left;
        $trans = $trans;
        $logo = $logo;
        $conf = floatval($conf);
        $succ =$succ;
        $link = 'review.php?comp='.$id;
    
        if($succ == '1')
        {
            $val = 'Success!';
        }
        else
        {
            $val = 'Failure';
        }
       
echo "  <section class='video'>
            <div class='overlay'></div>
            <h1>$name</h1>
      </section>
        <section class='container'>
            <div class='row'>
               <div  class='col-md-4 col-sm-12 col-xs-12'>
                
                  <div class='row'>
                     <form action = 'formSubmit2.php' method = 'POST'>
                    <div class='form-group'>
                    <label for='userid'>User Id</label>
                    <input type='text' class='form-control' id='userid' name = 'userid'>
                    
                    <label for='cusid'>Company Id</label>
                    <input type='text' class='form-control' id='cusid' name = 'cusid'>
                    
                    <label for='amt'>Amount</label>
                    <input type='text' class='form-control' id='amt' name = 'amt'>
                    </div>
                    <input type = 'submit' class='btn btn-warning' value = 'INVEST'> </input>
                    
                    </form>
                    </div>
                    
                    <div class = 'row'>
                    <div class = 'col-md-3'>
                    </div>
                    <div class = 'col-md-6'>
                    <a href = $link><button class='btn btn-default'>Reviews</button></a>
                    </div>
                    <div class = 'col-md-3'>
                    </div>
                    </div>
                    
               </div>
               <div class='col-md-8 col-sm-12 col-xs-12'>
                  <p style = 'text-align: justify; font-size: 22px; padding: 10px;'>
                  $desc
                  </p>
               </div>
            </div>
            <div class = 'row'>
                <div class = 'col-md-4'>
                </div>
                <div class = 'col-md-4'>
                <h3>REQUIRED:</h3>
                <h3>$req</h3>
                </div>
                <div class = 'col-md-4'>
                <h3>LEFT:</h3>
                <h3>$left</h3>
                </div>
            </div>
            
            <div class = 'row'>
                <div class = 'col-md-4'>
                </div>
                <div class = 'col-md-4'>
                <h3>PREDICTED FUTURE:</h3>
                <h4>$val with $conf % confidence</h4>
                </div>
                <div class = 'col-md-4'>
            </div>
            </div>
            </div>
            </div>
      </section>";
}

function investor(){
    $result=json_decode(exec('python load_trans.py 1'),true);
    foreach($result as &$value)
    {
        list($id,$cid,$uid, $amt, $share, $date, $profit, $name)=explode("#",$value);
        $id = $id;
        $name = $cid;
        $cid = $cid;
        $uid = $uid;
        $amt = $amt;
        $share = $share;
        $profit = $profit;
        
        
        echo "
            <tbody>
                <td>$id</td>
                <a href = $link><td>$name</td></a>
                <td>$amt</td>
                <td>$share</td>
                <td>$profit</td>
            </tbody>
        ";
    }
}

function listComp(){
    $result=json_decode(exec('python comp_listing.py 1'),true);
    foreach($result as &$value)
    {
        list($id,$name)=explode("#",$value);
        $id = $id;
        $name = $name;
        $link = 'investorCompany.php?val='.$id;
        
        echo "
            <tbody>
                <td>$id</td>
                <td><a href = $link>$name</a></td>
            </tbody>
        ";
    }
}
?>