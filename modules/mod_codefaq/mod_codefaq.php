<?php
// Copyright http://codematrix.ru/ Alex Voloh, Elena Kryukova
// License: GNU/GPL v.2 or later
// Non-commercial
defined('_JEXEC') or die;
$document =& JFactory::getDocument();
$modway = JURI::base(true).'/modules/mod_codefaq/';
$jqueryinclude = $params->get('jqueryinclude');
$codecoloreven = $params->get('codecoloreven');
$codecolorhover = $params->get('codecolorhover');
$codebordercolor = $params->get('codebordercolor');
$codeicons = $params->get('codeicons');
$document->addStyleSheet($modway.'tmpl/css/faq.css');
if ($jqueryinclude == '1'){
$document->addScript ('https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js');
}
$document->addScript ($modway.'tmpl/js/faq.js');

//Block 1
$blockstatus1 = $params->get('blockstatus1');
$question1 = $params->get('question1');
$answer1 = $params->get('answer1');

//Block 2
$blockstatus2 = $params->get('blockstatus2');
$question2 = $params->get('question2');
$answer2 = $params->get('answer2');

//Block 3
$blockstatus3 = $params->get('blockstatus3');
$question3 = $params->get('question3');
$answer3 = $params->get('answer3');

//Block 4
$blockstatus4 = $params->get('blockstatus4');
$question4 = $params->get('question4');
$answer4 = $params->get('answer4');

//Block 5
$blockstatus5 = $params->get('blockstatus5');
$question5 = $params->get('question5');
$answer5 = $params->get('answer5');

//Block 6
$blockstatus6 = $params->get('blockstatus6');
$question6 = $params->get('question6');
$answer6 = $params->get('answer6');

//Block 7
$blockstatus7 = $params->get('blockstatus7');
$question7 = $params->get('question7');
$answer7 = $params->get('answer7');

//Block 8
$blockstatus8 = $params->get('blockstatus8');
$question8 = $params->get('question8');
$answer8 = $params->get('answer8');

//Block 9
$blockstatus9 = $params->get('blockstatus9');
$question9 = $params->get('question9');
$answer9 = $params->get('answer9');

//Block 10
$blockstatus10 = $params->get('blockstatus10');
$question10 = $params->get('question10');
$answer10 = $params->get('answer10');

//Block 11
$blockstatus11 = $params->get('blockstatus11');
$question11 = $params->get('question11');
$answer11 = $params->get('answer11');

//Block 12
$blockstatus12 = $params->get('blockstatus12');
$question12 = $params->get('question12');
$answer12 = $params->get('answer12');

//Block 13
$blockstatus13 = $params->get('blockstatus13');
$question13 = $params->get('question13');
$answer13 = $params->get('answer13');

//Block 14
$blockstatus14 = $params->get('blockstatus14');
$question14 = $params->get('question14');
$answer14 = $params->get('answer14');

//Block 15
$blockstatus15 = $params->get('blockstatus15');
$question15 = $params->get('question15');
$answer15 = $params->get('answer15');

//Block 16
$blockstatus16 = $params->get('blockstatus16');
$question16 = $params->get('question16');
$answer16 = $params->get('answer16');

//Block 17
$blockstatus17 = $params->get('blockstatus17');
$question17 = $params->get('question17');
$answer17 = $params->get('answer17');

//Block 18
$blockstatus18 = $params->get('blockstatus18');
$question18 = $params->get('question18');
$answer18 = $params->get('answer18');

//Block 19
$blockstatus19 = $params->get('blockstatus19');
$question19 = $params->get('question19');
$answer19 = $params->get('answer19');

//Block 20
$blockstatus20 = $params->get('blockstatus20');
$question20 = $params->get('question20');
$answer20 = $params->get('answer20');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_codefaq', $params->get('layout', 'default'));

?>
