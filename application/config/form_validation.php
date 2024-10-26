<?php

// $config = [
//             'add_article_rules'=>  [

//                                             [
//                                                 'field'=> 'title',
//                                                 'label'=> 'Article Title',
//                                                 'rules' => 'required|alphadash'

//                                             ],
//                                             [
//                                                'field'=> 'body',
//                                                 'label'=> 'Article Body',
//                                                 'rules' => 'required'



//                                             ]
            




//                                     ]



// ];



$config['signup'] = array(
        //  array(
            
            array(
                   'field'=> 'title',
                    'label'=> 'Article Title',
                    'rules' => 'required'
            ),
            array(
                    'field'=> 'body',
                    'label'=> 'Article Body',
                    'rules' => 'required'
            )
           
    // )
    
);