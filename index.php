<?php get_header();
  
?>
   <main>
   <h1 class="title"><?php bloginfo('description'); ?></h1>
   <section>
    <button class="generateDecision">Click here</button>
    <button class="refresh">Try again</button>
   </section>
  </main> 

 <script type ="text/JavaScript">

const generateDecision = document.querySelector(".generateDecision");
const refresh = document.querySelector(".refresh");

// When button is clicked on, generate random decision response
generateDecision.addEventListener("click", (e) => {
  //create random number
  let generateNumber = Math.floor(Math.random() * 8);

  //returned decision based on number
  switch ((decision = generateNumber)) {
    case 0:
      generateDecision.textContent = "Go for it!";
      break;
    case 1:
      generateDecision.textContent = "Maybe not this time";
      break;
    case 2:
      generateDecision.textContent = "You slay, bae!";
      break;
    case 3:
      generateDecision.textContent = "Ask again later";
      break;
    case 4:
      generateDecision.textContent = "Computer says no";
      break;
    case 5:
      generateDecision.textContent = "All roads lead to YES!";
      break;
    case 6:
      generateDecision.textContent = "The future looks hazy on this one";
      break;
    case 7:
      generateDecision.textContent = "I think you know, the time is not right";
      break;
    default:
      generateDecision.textContent = "Error, try again";
  }

  generateDecision.disabled = true;
});

refresh.addEventListener("click", (e) => {
  location.reload();
});
 </script>

<?php
  get_footer();
?>


