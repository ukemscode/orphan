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
 
  echo '
    <section class="card">
      <img src="/orphan/uploads/'.$photo.'" alt="" />
      <h4>',$name.'</h4>
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
      <div>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-mortarboard"
          viewBox="0 0 16 16"
        >
          <path
            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"
          />
          <path
            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"
          />
        </svg>
        <h6>Grade 2</h6>
      </div>
      <h6>
        Sarah is a bright and cheerful girl who loves reading and drawing. She
        dreams of becoming an artist one day.
      </h6>
      <a href="">Sponsor </a>

      <h6 >'.$status.'</h6>
    </section>';
}

?>