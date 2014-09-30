<?php

$snippets = array();

/* course snippets */
 
  
  $snippet_name = 'modHybridAuth.postHook';
  $content = getSnippetContent($sources['snippets']  . 'modHybridAuth.postHook.php');
  
  if(!empty($content)){
    $snippet = $modx->newObject('modSnippet');
    $snippet->fromArray(array(
      'name' => $snippet_name,
      'description' => $snippet_name.'_desc',
      'snippet' => $content,
    ),'',true,true);
    $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.$snippet_name.' snippet.'); flush();
    
    $path = $sources['properties']."{$snippet_name}.snippet.properties.php";
    if(is_file($path)){
      $properties = include $path;
      $snippet->setProperties($properties);
      $modx->log(modX::LOG_LEVEL_INFO,'Adding properties for '.$snippet_name.' snippet.'); flush();
    }
    
    $snippets[] = $snippet;
  }
  
  
  $snippet_name = 'modHybridAuth.Register';
  $content = getSnippetContent($sources['snippets'] .  'modHybridAuth.Register.php');
  
  if(!empty($content)){
    $snippet = $modx->newObject('modSnippet');
    $snippet->fromArray(array(
      'name' => $snippet_name,
      'description' => $snippet_name.'_desc',
      'snippet' => $content,
    ),'',true,true);
    $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.$snippet_name.' snippet.'); flush();
    
    $path = $sources['properties']."{$snippet_name}.snippet.properties.php";
    if(is_file($path)){
      $properties = include $path;
      $snippet->setProperties($properties);
      $modx->log(modX::LOG_LEVEL_INFO,'Adding properties for '.$snippet_name.' snippet.'); flush();
    }
    
    $snippets[] = $snippet;
  }
 

unset($properties,$snippet,$path,$snippet_name,$content,$list);
return $snippets;