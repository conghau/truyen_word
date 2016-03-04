<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
$route ['crawler/getstorymanga24h'] = 'crawler/GetStoryManga24h';

$route ['crawler/getchaptermanga24h'] = 'crawler/GetChapterManga24h';
$route ['crawler/getchaptermanga24h/(:any)'] = 'crawler/GetChapterManga24h/$1';

$route ['crawler/updatedetailmanga24h'] = 'crawler/UpdateDetailManga24h';
$route ['crawler/updatedetailmanga24h/(:any)'] = 'crawler/UpdateDetailManga24h/$1';

$route ['crawler/getimagemanga24h'] = 'crawler/GetImageManga24h';

$route ['crawler/get_story'] = 'crawler/get_story';
$route ['crawler/get-story/(:any)'] = 'crawler/getStory/$1';

$route ['crawler/getconfig'] = 'manager/getConfig';

$route ['crawler/getinfoweb'] = 'crawler/get_info_all_stories';
$route ['crawler/getinfoweb/(:num)'] = 'crawler/get_info_stories/$1';

$route ['crawler/getchapterwebtruyen'] = 'crawler/getChapterWebTruyen';
$route ['crawler/getcontentchapter'] = 'crawler/getContentChapter';