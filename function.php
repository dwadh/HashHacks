<?php session_start();

function companyDetails(){
    
   $result=json_decode(exec('python loadcomp.py 1'),true);
   
    
        list($id,$name,$desc, $req, $left, $trans, $logo)=explode("#",$result[0]);
        
        $id =$id;
        $name=$name;
        $desc = $desc;
        $req = $req;
        $left = $left;
        $trans = $trans;
        $logo = $logo;
       
echo "  <section class='video'>
            <div class='overlay'></div>
            <h1>$name</h1>
      </section>
        <section class='container'>
            <div class='row'>
               <div  class='col-md-4 col-sm-12 col-xs-12'>
                  <div class='row'>
                     <img src='$logo' alt='Logo'>
                  </div>
                  <div class='row'>
                     <div  class='col-md-4 col-md-offset-5 col-sm-12 col-xs-12'>
                        <a href='#demo' data-scroll class='btn-custom-services'> Pay </a>
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
                <h3>$req</h3>
                </div>
                <div class = 'col-md-4'>
                <h3>$left</h3>
                </div>
                <div class = 'col-md-4'>
                <h3>$trans</h3>
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
                <td>$name</td>
                <td>$amt</td>
                <td>$share</td>
                <td>$profit</td>
            </tbody>
        ";
    }
}

function listComp(){
    $result=json_decode(exec('python load_trans.py 1'),true);
    foreach($result as &$value)
    {
        list($id,$name)=explode("#",$value);
        $id = $id;
        $name = $name;
        
        echo "
            <tbody>
                <td>$id</td>
                <td>$name</td>
            </tbody>
        ";
    }
}
?>