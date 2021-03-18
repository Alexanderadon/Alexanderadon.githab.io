<?php 
class Cms5ec193697fa1f762887522_81435da6b2362be278655462797b91f3Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if (!$this->post)
    return App::make('Cms\Classes\Controller')->setStatusCode(404)->run('/404');
}
}
