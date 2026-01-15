<?php

function card($title,$content){
    echo '
      <section class="tidx">
        <h2>'.$title.'#</h2>
        <h3>'.
         $content.'
        </h3>
     </section>';
}

function Ocard($name="",$age=0,$gender="",$photo="",$about="",$status=""){

   $atp=$gender=='Male'? 'he':'she';
 
  echo '
    <section class="card">
      <img src="/orphan/uploads/'.$photo.'" alt="" />
      <h4>'.$name.'</h4>
      <div>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-calendar4"
          viewBox="0 0 16 16"
        >
          <path
            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"
          />
        </svg>
        <h6>'.$age.' years old • '.$gender.'</h6>
      </div>
     
      <h6>
        '.$name.' is a bright,cheerful and also loves reading and drawing. '.$atp.'
        dreams of becoming an artist one day.
      </h6>
      <a href="/orphan/pages/donations.php?name='.$name.'">Sponsor </a>

      <h6 >'.$status.'</h6>
    </section>';
}

?>