<?php
# LOOP - execute codes set numbers of times:

/* 
For loop
while
Do ..while
Foreach
*/

#for loop:
  # params: init, conditon, increment  
//   for ($i=5; $i <=10; $i++) { 
//       echo ' number  '.  $i;
//       echo '<br>';
//   }
  #while loop:
    #params: condition
    // $i = 0;
    // while ($i <= 10) {
    //     echo $i;
    //     echo '<br>';
    //     $i++; 
    // }

    // do ..while loop:
        #@params - condition
        // $i = 0;
        // do {
        //     echo $i;
        //     echo '<br>';
        //     $i++;
        // } while ($i < 10);


    #for each loop:
        #@params for arrays
        $people = array('Brad'=>'brad@en.com', 'Kelly'=>'kelly@um.com', 'John'=>'john@kl.com');
        foreach ($people as $person=>$email) {
           echo $person.':'.$email;
           echo '<br>';
        }

?>