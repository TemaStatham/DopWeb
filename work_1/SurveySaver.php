<?php

require_once('src/common.inc.php');
$survey = new RequestSurvey;
$storageData = $survey->parameter();
$fileStorage = new SurveyFileStorage;
$file = $fileStorage->fileStore($storageData);
$printStorage = new printSurvey;
$printStorage->printFile($storageData);
