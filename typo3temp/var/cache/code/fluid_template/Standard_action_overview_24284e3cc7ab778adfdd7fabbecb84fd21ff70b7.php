<?php

class Standard_action_overview_24284e3cc7ab778adfdd7fabbecb84fd21ff70b7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['key'] = NULL;
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['languageKey'] = NULL;
$arguments289['alternativeLanguageKeys'] = NULL;
$arguments289['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints.listing';

$output288 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext)]);

$output288 .= '
                <ul>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
                    <li>
                        <strong>';
$array295 = array (
);
$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item', $array295)]);

$output294 .= '</strong>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
                            <ul>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
                                    <li>
                                        ';
$array306 = array (
);
$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('schema', $array306)]);

$output305 .= ' (';
$array307 = array (
);
$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array307)]);

$output305 .= ')
                                    </li>
                                ';
return $output305;
};
$arguments302 = array();
$arguments302['each'] = NULL;
$arguments302['as'] = NULL;
$arguments302['key'] = NULL;
$arguments302['reverse'] = false;
$arguments302['iteration'] = NULL;
$array304 = array (
);$arguments302['each'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array304);
$arguments302['key'] = 'schema';
$arguments302['as'] = 'count';

$output301 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output301 .= '
                            </ul>
                        ';
return $output301;
};
$arguments296 = array();
$arguments296['then'] = NULL;
$arguments296['else'] = NULL;
$arguments296['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array298 = array();
$array299 = array (
);$array298['0'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array299);

$expression300 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments296['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression300(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array298)
					),
					$renderingContext
				);
$arguments296['__thenClosure'] = $renderChildrenClosure297;

$output294 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output294 .= '
                    </li>
                ';
return $output294;
};
$arguments291 = array();
$arguments291['each'] = NULL;
$arguments291['as'] = NULL;
$arguments291['key'] = NULL;
$arguments291['reverse'] = false;
$arguments291['iteration'] = NULL;
$array293 = array (
);$arguments291['each'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array293);
$arguments291['key'] = 'item';
$arguments291['as'] = 'schemes';

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output288 .= '
                </ul>
            ';
return $output288;
};
$arguments284 = array();
$arguments284['message'] = NULL;
$arguments284['title'] = NULL;
$arguments284['state'] = -2;
$arguments284['iconName'] = NULL;
$arguments284['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['key'] = NULL;
$arguments286['id'] = NULL;
$arguments286['default'] = NULL;
$arguments286['arguments'] = NULL;
$arguments286['extensionName'] = NULL;
$arguments286['languageKey'] = NULL;
$arguments286['alternativeLanguageKeys'] = NULL;
$arguments286['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints';
$arguments284['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);
$arguments284['state'] = 1;
$renderChildrenClosure285 = ($arguments284['message'] !== null) ? function() use ($arguments284) { return $arguments284['message']; } : $renderChildrenClosure285;
$output283 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output283 .= '
        ';
return $output283;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array281);

$expression282 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['__thenClosure'] = $renderChildrenClosure279;

$output277 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
        <div class="table-fit">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['key'] = NULL;
$arguments308['id'] = NULL;
$arguments308['default'] = NULL;
$arguments308['arguments'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['languageKey'] = NULL;
$arguments308['alternativeLanguageKeys'] = NULL;
$arguments308['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site';

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);

$output277 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['key'] = NULL;
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$arguments310['languageKey'] = NULL;
$arguments310['alternativeLanguageKeys'] = NULL;
$arguments310['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output277 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['key'] = NULL;
$arguments312['id'] = NULL;
$arguments312['default'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['languageKey'] = NULL;
$arguments312['alternativeLanguageKeys'] = NULL;
$arguments312['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl';

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output277 .= '</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                    <tr>
                        <td nowrap valign="top">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
                                <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array322 = array (
);
$output321 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin', $array322)]);

$output321 .= 'px"></span>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array379 = array (
);
$output378 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array379)]);

$output378 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['table'] = NULL;
$arguments380['row'] = NULL;
$arguments380['size'] = 'small';
$arguments380['alternativeMarkupIdentifier'] = NULL;
$arguments380['table'] = 'pages';
$array382 = array (
);$arguments380['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array382);

$output378 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output378 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
                                                    ';
$array412 = array (
);
$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array412)]);

$output411 .= ' [ID: ';
$array413 = array (
);
$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array413)]);

$output411 .= ']
                                                ';
return $output411;
};
$arguments405 = array();
$arguments405['additionalAttributes'] = NULL;
$arguments405['data'] = NULL;
$arguments405['route'] = NULL;
$arguments405['parameters'] = array (
);
$arguments405['referenceType'] = 'absolute';
$arguments405['name'] = NULL;
$arguments405['rel'] = NULL;
$arguments405['rev'] = NULL;
$arguments405['target'] = NULL;
$arguments405['class'] = NULL;
$arguments405['dir'] = NULL;
$arguments405['id'] = NULL;
$arguments405['lang'] = NULL;
$arguments405['style'] = NULL;
$arguments405['title'] = NULL;
$arguments405['accesskey'] = NULL;
$arguments405['tabindex'] = NULL;
$arguments405['onclick'] = NULL;
$arguments405['route'] = 'site_configuration';
// Rendering Array
$array407 = array();
$array407['action'] = 'edit';
$array408 = array (
);$array407['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array408);
$arguments405['parameters'] = $array407;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['key'] = NULL;
$arguments409['id'] = NULL;
$arguments409['default'] = NULL;
$arguments409['arguments'] = NULL;
$arguments409['extensionName'] = NULL;
$arguments409['languageKey'] = NULL;
$arguments409['alternativeLanguageKeys'] = NULL;
$arguments409['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments405['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output404 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
                                            ';
return $output404;
};
$arguments402 = array();

$output401 .= '';

$output401 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
                                                ';
$array417 = array (
);
$output416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array417)]);

$output416 .= ' [ID: ';
$array418 = array (
);
$output416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array418)]);

$output416 .= ']
                                            ';
return $output416;
};
$arguments414 = array();
$arguments414['if'] = NULL;

$output401 .= '';

$output401 .= '
                                        ';
return $output401;
};
$arguments383 = array();
$arguments383['then'] = NULL;
$arguments383['else'] = NULL;
$arguments383['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments383['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments383['__thenClosure'] = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                                                    ';
$array393 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array393)]);

$output392 .= ' [ID: ';
$array394 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array394)]);

$output392 .= ']
                                                ';
return $output392;
};
$arguments386 = array();
$arguments386['additionalAttributes'] = NULL;
$arguments386['data'] = NULL;
$arguments386['route'] = NULL;
$arguments386['parameters'] = array (
);
$arguments386['referenceType'] = 'absolute';
$arguments386['name'] = NULL;
$arguments386['rel'] = NULL;
$arguments386['rev'] = NULL;
$arguments386['target'] = NULL;
$arguments386['class'] = NULL;
$arguments386['dir'] = NULL;
$arguments386['id'] = NULL;
$arguments386['lang'] = NULL;
$arguments386['style'] = NULL;
$arguments386['title'] = NULL;
$arguments386['accesskey'] = NULL;
$arguments386['tabindex'] = NULL;
$arguments386['onclick'] = NULL;
$arguments386['route'] = 'site_configuration';
// Rendering Array
$array388 = array();
$array388['action'] = 'edit';
$array389 = array (
);$array388['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array389);
$arguments386['parameters'] = $array388;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['key'] = NULL;
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['languageKey'] = NULL;
$arguments390['alternativeLanguageKeys'] = NULL;
$arguments390['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments386['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output385 .= '
                                            ';
return $output385;
};
$arguments383['__elseClosures'][] = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
                                                ';
$array396 = array (
);
$output395 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array396)]);

$output395 .= ' [ID: ';
$array397 = array (
);
$output395 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array397)]);

$output395 .= ']
                                            ';
return $output395;
};

$output378 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output378 .= '
                                    ';
return $output378;
};
$arguments376 = array();

$output375 .= '';

$output375 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output421 = '';

$output421 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['table'] = NULL;
$arguments422['row'] = NULL;
$arguments422['size'] = 'small';
$arguments422['alternativeMarkupIdentifier'] = NULL;
$arguments422['table'] = 'pages';
$array424 = array (
);$arguments422['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array424);

$output421 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output421 .= '
                                        ';
$array425 = array (
);
$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array425)]);

$output421 .= '<br>
                                    ';
return $output421;
};
$arguments419 = array();
$arguments419['if'] = NULL;

$output375 .= '';

$output375 .= '
                                ';
return $output375;
};
$arguments323 = array();
$arguments323['then'] = NULL;
$arguments323['else'] = NULL;
$arguments323['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array371 = array();
$array372 = array (
);$array371['0'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array372);
$array371['1'] = ' == ';
$array373 = array (
);$array371['2'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array373);

$expression374 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments323['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array371)
					),
					$renderingContext
				);
$arguments323['__thenClosure'] = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array326 = array (
);
$output325 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array326)]);

$output325 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['table'] = NULL;
$arguments327['row'] = NULL;
$arguments327['size'] = 'small';
$arguments327['alternativeMarkupIdentifier'] = NULL;
$arguments327['table'] = 'pages';
$array329 = array (
);$arguments327['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array329);

$output325 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output325 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
                                                    ';
$array359 = array (
);
$output358 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array359)]);

$output358 .= ' [ID: ';
$array360 = array (
);
$output358 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array360)]);

$output358 .= ']
                                                ';
return $output358;
};
$arguments352 = array();
$arguments352['additionalAttributes'] = NULL;
$arguments352['data'] = NULL;
$arguments352['route'] = NULL;
$arguments352['parameters'] = array (
);
$arguments352['referenceType'] = 'absolute';
$arguments352['name'] = NULL;
$arguments352['rel'] = NULL;
$arguments352['rev'] = NULL;
$arguments352['target'] = NULL;
$arguments352['class'] = NULL;
$arguments352['dir'] = NULL;
$arguments352['id'] = NULL;
$arguments352['lang'] = NULL;
$arguments352['style'] = NULL;
$arguments352['title'] = NULL;
$arguments352['accesskey'] = NULL;
$arguments352['tabindex'] = NULL;
$arguments352['onclick'] = NULL;
$arguments352['route'] = 'site_configuration';
// Rendering Array
$array354 = array();
$array354['action'] = 'edit';
$array355 = array (
);$array354['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array355);
$arguments352['parameters'] = $array354;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['languageKey'] = NULL;
$arguments356['alternativeLanguageKeys'] = NULL;
$arguments356['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments352['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output351 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output351 .= '
                                            ';
return $output351;
};
$arguments349 = array();

$output348 .= '';

$output348 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
                                                ';
$array364 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array364)]);

$output363 .= ' [ID: ';
$array365 = array (
);
$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array365)]);

$output363 .= ']
                                            ';
return $output363;
};
$arguments361 = array();
$arguments361['if'] = NULL;

$output348 .= '';

$output348 .= '
                                        ';
return $output348;
};
$arguments330 = array();
$arguments330['then'] = NULL;
$arguments330['else'] = NULL;
$arguments330['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array345 = array();
$array346 = array (
);$array345['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array346);

$expression347 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments330['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression347(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array345)
					),
					$renderingContext
				);
$arguments330['__thenClosure'] = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
                                                    ';
$array340 = array (
);
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array340)]);

$output339 .= ' [ID: ';
$array341 = array (
);
$output339 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array341)]);

$output339 .= ']
                                                ';
return $output339;
};
$arguments333 = array();
$arguments333['additionalAttributes'] = NULL;
$arguments333['data'] = NULL;
$arguments333['route'] = NULL;
$arguments333['parameters'] = array (
);
$arguments333['referenceType'] = 'absolute';
$arguments333['name'] = NULL;
$arguments333['rel'] = NULL;
$arguments333['rev'] = NULL;
$arguments333['target'] = NULL;
$arguments333['class'] = NULL;
$arguments333['dir'] = NULL;
$arguments333['id'] = NULL;
$arguments333['lang'] = NULL;
$arguments333['style'] = NULL;
$arguments333['title'] = NULL;
$arguments333['accesskey'] = NULL;
$arguments333['tabindex'] = NULL;
$arguments333['onclick'] = NULL;
$arguments333['route'] = 'site_configuration';
// Rendering Array
$array335 = array();
$array335['action'] = 'edit';
$array336 = array (
);$array335['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array336);
$arguments333['parameters'] = $array335;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['key'] = NULL;
$arguments337['id'] = NULL;
$arguments337['default'] = NULL;
$arguments337['arguments'] = NULL;
$arguments337['extensionName'] = NULL;
$arguments337['languageKey'] = NULL;
$arguments337['alternativeLanguageKeys'] = NULL;
$arguments337['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments333['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
                                            ';
return $output332;
};
$arguments330['__elseClosures'][] = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
                                                ';
$array343 = array (
);
$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array343)]);

$output342 .= ' [ID: ';
$array344 = array (
);
$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array344)]);

$output342 .= ']
                                            ';
return $output342;
};

$output325 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output325 .= '
                                    ';
return $output325;
};
$arguments323['__elseClosures'][] = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['table'] = NULL;
$arguments367['row'] = NULL;
$arguments367['size'] = 'small';
$arguments367['alternativeMarkupIdentifier'] = NULL;
$arguments367['table'] = 'pages';
$array369 = array (
);$arguments367['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array369);

$output366 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output366 .= '
                                        ';
$array370 = array (
);
$output366 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array370)]);

$output366 .= '<br>
                                    ';
return $output366;
};

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output321 .= '
                            ';
return $output321;
};
$arguments318 = array();
$arguments318['each'] = NULL;
$arguments318['as'] = NULL;
$arguments318['key'] = NULL;
$arguments318['reverse'] = false;
$arguments318['iteration'] = NULL;
$array320 = array (
);$arguments318['each'] = $renderingContext->getVariableProvider()->getByPath('page.rootline', $array320);
$arguments318['as'] = 'rootLinePage';
$arguments318['iteration'] = 'i';

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
                                    <code>';
$array445 = array (
);
$output444 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array445)]);

$output444 .= '</code>
                                ';
return $output444;
};
$arguments442 = array();

$output441 .= '';

$output441 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$output448 = '';

$output448 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$arguments454['key'] = NULL;
$arguments454['id'] = NULL;
$arguments454['default'] = NULL;
$arguments454['arguments'] = NULL;
$arguments454['extensionName'] = NULL;
$arguments454['languageKey'] = NULL;
$arguments454['alternativeLanguageKeys'] = NULL;
$arguments454['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext)]);

$output453 .= '
                                        ';
return $output453;
};
$arguments449 = array();
$arguments449['additionalAttributes'] = NULL;
$arguments449['data'] = NULL;
$arguments449['route'] = NULL;
$arguments449['parameters'] = array (
);
$arguments449['referenceType'] = 'absolute';
$arguments449['name'] = NULL;
$arguments449['rel'] = NULL;
$arguments449['rev'] = NULL;
$arguments449['target'] = NULL;
$arguments449['class'] = NULL;
$arguments449['dir'] = NULL;
$arguments449['id'] = NULL;
$arguments449['lang'] = NULL;
$arguments449['style'] = NULL;
$arguments449['title'] = NULL;
$arguments449['accesskey'] = NULL;
$arguments449['tabindex'] = NULL;
$arguments449['onclick'] = NULL;
$arguments449['route'] = 'site_configuration';
// Rendering Array
$array451 = array();
$array451['action'] = 'edit';
$array452 = array (
);$array451['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array452);
$arguments449['parameters'] = $array451;
$arguments449['title'] = 'Create configuration';
$arguments449['class'] = 'btn btn-primary';

$output448 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output448 .= '
                                    </div>
                                ';
return $output448;
};
$arguments446 = array();
$arguments446['if'] = NULL;

$output441 .= '';

$output441 .= '
                            ';
return $output441;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array438 = array();
$array439 = array (
);$array438['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array439);

$expression440 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression440(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array438)
					),
					$renderingContext
				);
$arguments426['__thenClosure'] = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
                                    <code>';
$array429 = array (
);
$output428 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array429)]);

$output428 .= '</code>
                                ';
return $output428;
};
$arguments426['__elseClosures'][] = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['key'] = NULL;
$arguments436['id'] = NULL;
$arguments436['default'] = NULL;
$arguments436['arguments'] = NULL;
$arguments436['extensionName'] = NULL;
$arguments436['languageKey'] = NULL;
$arguments436['alternativeLanguageKeys'] = NULL;
$arguments436['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext)]);

$output435 .= '
                                        ';
return $output435;
};
$arguments431 = array();
$arguments431['additionalAttributes'] = NULL;
$arguments431['data'] = NULL;
$arguments431['route'] = NULL;
$arguments431['parameters'] = array (
);
$arguments431['referenceType'] = 'absolute';
$arguments431['name'] = NULL;
$arguments431['rel'] = NULL;
$arguments431['rev'] = NULL;
$arguments431['target'] = NULL;
$arguments431['class'] = NULL;
$arguments431['dir'] = NULL;
$arguments431['id'] = NULL;
$arguments431['lang'] = NULL;
$arguments431['style'] = NULL;
$arguments431['title'] = NULL;
$arguments431['accesskey'] = NULL;
$arguments431['tabindex'] = NULL;
$arguments431['onclick'] = NULL;
$arguments431['route'] = 'site_configuration';
// Rendering Array
$array433 = array();
$array433['action'] = 'edit';
$array434 = array (
);$array433['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array434);
$arguments431['parameters'] = $array433;
$arguments431['title'] = 'Create configuration';
$arguments431['class'] = 'btn btn-primary';

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output430 .= '
                                    </div>
                                ';
return $output430;
};

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output317 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
                                <table class="table table-striped table-no-borders">
                                    <tr>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['key'] = NULL;
$arguments462['id'] = NULL;
$arguments462['default'] = NULL;
$arguments462['arguments'] = NULL;
$arguments462['extensionName'] = NULL;
$arguments462['languageKey'] = NULL;
$arguments462['alternativeLanguageKeys'] = NULL;
$arguments462['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language';

$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext)]);

$output461 .= '</th>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['key'] = NULL;
$arguments464['id'] = NULL;
$arguments464['default'] = NULL;
$arguments464['arguments'] = NULL;
$arguments464['extensionName'] = NULL;
$arguments464['languageKey'] = NULL;
$arguments464['alternativeLanguageKeys'] = NULL;
$arguments464['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.fullUrlPrefix';

$output461 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext)]);

$output461 .= '</th>
                                    </tr>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output487 = '';

$output487 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['identifier'] = NULL;
$arguments491['size'] = 'small';
$arguments491['overlay'] = NULL;
$arguments491['state'] = 'default';
$arguments491['alternativeMarkupIdentifier'] = NULL;
$array493 = array (
);$arguments491['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array493);

$output490 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output490 .= ' ';
$array494 = array (
);
$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array494)]);

$output490 .= '
                                                ';
return $output490;
};
$arguments488 = array();

$output487 .= '';

$output487 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['identifier'] = NULL;
$arguments498['size'] = 'small';
$arguments498['overlay'] = NULL;
$arguments498['state'] = 'default';
$arguments498['alternativeMarkupIdentifier'] = NULL;
$array500 = array (
);$arguments498['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array500);
$arguments498['overlay'] = 'overlay-hidden';

$output497 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output497 .= ' <span class="text-muted">';
$array501 = array (
);
$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array501)]);

$output497 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments502 = array();
$arguments502['key'] = NULL;
$arguments502['id'] = NULL;
$arguments502['default'] = NULL;
$arguments502['arguments'] = NULL;
$arguments502['extensionName'] = NULL;
$arguments502['languageKey'] = NULL;
$arguments502['alternativeLanguageKeys'] = NULL;
$arguments502['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext)]);

$output497 .= ')</span>
                                                ';
return $output497;
};
$arguments495 = array();
$arguments495['if'] = NULL;

$output487 .= '';

$output487 .= '
                                            ';
return $output487;
};
$arguments470 = array();
$arguments470['then'] = NULL;
$arguments470['else'] = NULL;
$arguments470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array484 = array();
$array485 = array (
);$array484['0'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled', $array485);

$expression486 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression486(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array484)
					),
					$renderingContext
				);
$arguments470['__thenClosure'] = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments473 = array();
$arguments473['identifier'] = NULL;
$arguments473['size'] = 'small';
$arguments473['overlay'] = NULL;
$arguments473['state'] = 'default';
$arguments473['alternativeMarkupIdentifier'] = NULL;
$array475 = array (
);$arguments473['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array475);

$output472 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output472 .= ' ';
$array476 = array (
);
$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array476)]);

$output472 .= '
                                                ';
return $output472;
};
$arguments470['__elseClosures'][] = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['identifier'] = NULL;
$arguments478['size'] = 'small';
$arguments478['overlay'] = NULL;
$arguments478['state'] = 'default';
$arguments478['alternativeMarkupIdentifier'] = NULL;
$array480 = array (
);$arguments478['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array480);
$arguments478['overlay'] = 'overlay-hidden';

$output477 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= ' <span class="text-muted">';
$array481 = array (
);
$output477 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array481)]);

$output477 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments482 = array();
$arguments482['key'] = NULL;
$arguments482['id'] = NULL;
$arguments482['default'] = NULL;
$arguments482['arguments'] = NULL;
$arguments482['extensionName'] = NULL;
$arguments482['languageKey'] = NULL;
$arguments482['alternativeLanguageKeys'] = NULL;
$arguments482['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output477 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext)]);

$output477 .= ')</span>
                                                ';
return $output477;
};

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
                                        </td>
                                        <td><a href="';
$array504 = array (
);
$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array504)]);

$output469 .= '" target="_blank">';
$array505 = array (
);
$output469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array505)]);

$output469 .= '</a></td>
                                    </tr>
                                ';
return $output469;
};
$arguments466 = array();
$arguments466['each'] = NULL;
$arguments466['as'] = NULL;
$arguments466['key'] = NULL;
$arguments466['reverse'] = false;
$arguments466['iteration'] = NULL;
$array468 = array (
);$arguments466['each'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages', $array468);
$arguments466['as'] = 'siteLanguage';

$output461 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output461 .= '
                                </table>
                            ';
return $output461;
};
$arguments456 = array();
$arguments456['then'] = NULL;
$arguments456['else'] = NULL;
$arguments456['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array458 = array();
$array459 = array (
);$array458['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration', $array459);

$expression460 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments456['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression460(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array458)
					),
					$renderingContext
				);
$arguments456['__thenClosure'] = $renderChildrenClosure457;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output317 .= '
                        </td>
                        <td class="col-control nowrap">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['identifier'] = NULL;
$arguments519['size'] = 'small';
$arguments519['overlay'] = NULL;
$arguments519['state'] = 'default';
$arguments519['alternativeMarkupIdentifier'] = NULL;
$arguments519['identifier'] = 'actions-open';

$output518 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output518 .= '
                                    ';
return $output518;
};
$arguments512 = array();
$arguments512['additionalAttributes'] = NULL;
$arguments512['data'] = NULL;
$arguments512['route'] = NULL;
$arguments512['parameters'] = array (
);
$arguments512['referenceType'] = 'absolute';
$arguments512['name'] = NULL;
$arguments512['rel'] = NULL;
$arguments512['rev'] = NULL;
$arguments512['target'] = NULL;
$arguments512['class'] = NULL;
$arguments512['dir'] = NULL;
$arguments512['id'] = NULL;
$arguments512['lang'] = NULL;
$arguments512['style'] = NULL;
$arguments512['title'] = NULL;
$arguments512['accesskey'] = NULL;
$arguments512['tabindex'] = NULL;
$arguments512['onclick'] = NULL;
$arguments512['route'] = 'site_configuration';
// Rendering Array
$array514 = array();
$array514['action'] = 'edit';
$array515 = array (
);$array514['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array515);
$arguments512['parameters'] = $array514;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments516 = array();
$arguments516['key'] = NULL;
$arguments516['id'] = NULL;
$arguments516['default'] = NULL;
$arguments516['arguments'] = NULL;
$arguments516['extensionName'] = NULL;
$arguments516['languageKey'] = NULL;
$arguments516['alternativeLanguageKeys'] = NULL;
$arguments516['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments512['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);
$arguments512['class'] = 'btn btn-default';

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
$output532 = '';

$output532 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['identifier'] = NULL;
$arguments533['size'] = 'small';
$arguments533['overlay'] = NULL;
$arguments533['state'] = 'default';
$arguments533['alternativeMarkupIdentifier'] = NULL;
$arguments533['identifier'] = 'actions-delete';

$output532 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output532 .= '
                                    ';
return $output532;
};
$arguments521 = array();
$arguments521['additionalAttributes'] = NULL;
$arguments521['data'] = NULL;
$arguments521['route'] = NULL;
$arguments521['parameters'] = array (
);
$arguments521['referenceType'] = 'absolute';
$arguments521['name'] = NULL;
$arguments521['rel'] = NULL;
$arguments521['rev'] = NULL;
$arguments521['target'] = NULL;
$arguments521['class'] = NULL;
$arguments521['dir'] = NULL;
$arguments521['id'] = NULL;
$arguments521['lang'] = NULL;
$arguments521['style'] = NULL;
$arguments521['title'] = NULL;
$arguments521['accesskey'] = NULL;
$arguments521['tabindex'] = NULL;
$arguments521['onclick'] = NULL;
$arguments521['route'] = 'site_configuration';
// Rendering Array
$array523 = array();
$array523['action'] = 'delete';
$array524 = array (
);$array523['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array524);
$arguments521['parameters'] = $array523;
$arguments521['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['key'] = NULL;
$arguments525['id'] = NULL;
$arguments525['default'] = NULL;
$arguments525['arguments'] = NULL;
$arguments525['extensionName'] = NULL;
$arguments525['languageKey'] = NULL;
$arguments525['alternativeLanguageKeys'] = NULL;
$arguments525['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments521['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);
// Rendering Array
$array527 = array();
$array527['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['key'] = NULL;
$arguments528['id'] = NULL;
$arguments528['default'] = NULL;
$arguments528['arguments'] = NULL;
$arguments528['extensionName'] = NULL;
$arguments528['languageKey'] = NULL;
$arguments528['alternativeLanguageKeys'] = NULL;
$arguments528['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array527['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['key'] = NULL;
$arguments530['id'] = NULL;
$arguments530['default'] = NULL;
$arguments530['arguments'] = NULL;
$arguments530['extensionName'] = NULL;
$arguments530['languageKey'] = NULL;
$arguments530['alternativeLanguageKeys'] = NULL;
$arguments530['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array527['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);
$arguments521['data'] = $array527;

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);

$output511 .= '
                                ';
return $output511;
};
$arguments506 = array();
$arguments506['then'] = NULL;
$arguments506['else'] = NULL;
$arguments506['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array508 = array();
$array509 = array (
);$array508['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array509);

$expression510 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments506['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression510(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array508)
					),
					$renderingContext
				);
$arguments506['__thenClosure'] = $renderChildrenClosure507;

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output317 .= '
                            </div>
                        </td>
                    </tr>
                ';
return $output317;
};
$arguments314 = array();
$arguments314['each'] = NULL;
$arguments314['as'] = NULL;
$arguments314['key'] = NULL;
$arguments314['reverse'] = false;
$arguments314['iteration'] = NULL;
$array316 = array (
);$arguments314['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array316);
$arguments314['as'] = 'page';

$output277 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output277 .= '
                </tbody>
            </table>
        </div>
    ';
return $output277;
};
$arguments275 = array();

$output274 .= '';

$output274 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$output537 = '';

$output537 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments543 = array();
$arguments543['key'] = NULL;
$arguments543['id'] = NULL;
$arguments543['default'] = NULL;
$arguments543['arguments'] = NULL;
$arguments543['extensionName'] = NULL;
$arguments543['languageKey'] = NULL;
$arguments543['alternativeLanguageKeys'] = NULL;
$arguments543['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message';

$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext)]);

$output542 .= '</p>
        ';
return $output542;
};
$arguments538 = array();
$arguments538['message'] = NULL;
$arguments538['title'] = NULL;
$arguments538['state'] = -2;
$arguments538['iconName'] = NULL;
$arguments538['disableIcon'] = false;
$arguments538['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['key'] = NULL;
$arguments540['id'] = NULL;
$arguments540['default'] = NULL;
$arguments540['arguments'] = NULL;
$arguments540['extensionName'] = NULL;
$arguments540['languageKey'] = NULL;
$arguments540['alternativeLanguageKeys'] = NULL;
$arguments540['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title';
$arguments538['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);
$renderChildrenClosure539 = ($arguments538['message'] !== null) ? function() use ($arguments538) { return $arguments538['message']; } : $renderChildrenClosure539;
$output537 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);

$output537 .= '
    ';
return $output537;
};
$arguments535 = array();
$arguments535['if'] = NULL;

$output274 .= '';

$output274 .= '
';
return $output274;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('pages', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints.listing';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
                <ul>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                    <li>
                        <strong>';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item', $array23)]);

$output22 .= '</strong>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                            <ul>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                    <li>
                                        ';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('schema', $array34)]);

$output33 .= ' (';
$array35 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array35)]);

$output33 .= ')
                                    </li>
                                ';
return $output33;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$array32 = array (
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array32);
$arguments30['key'] = 'schema';
$arguments30['as'] = 'count';

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                            </ul>
                        ';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('schemes', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output22 .= '
                    </li>
                ';
return $output22;
};
$arguments19 = array();
$arguments19['each'] = NULL;
$arguments19['as'] = NULL;
$arguments19['key'] = NULL;
$arguments19['reverse'] = false;
$arguments19['iteration'] = NULL;
$array21 = array (
);$arguments19['each'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array21);
$arguments19['key'] = 'item';
$arguments19['as'] = 'schemes';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= '
                </ul>
            ';
return $output16;
};
$arguments12 = array();
$arguments12['message'] = NULL;
$arguments12['title'] = NULL;
$arguments12['state'] = -2;
$arguments12['iconName'] = NULL;
$arguments12['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints';
$arguments12['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
$arguments12['state'] = 1;
$renderChildrenClosure13 = ($arguments12['message'] !== null) ? function() use ($arguments12) { return $arguments12['message']; } : $renderChildrenClosure13;
$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
        ';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints', $array9);

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = $renderChildrenClosure7;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
        <div class="table-fit">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output5 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['languageKey'] = NULL;
$arguments38['alternativeLanguageKeys'] = NULL;
$arguments38['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output5 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output5 .= '</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                    <tr>
                        <td nowrap valign="top">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                                <span style="width: 1px; height: 1px; display:inline-block; margin-left: ';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin', $array50)]);

$output49 .= 'px"></span>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array107)]);

$output106 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['table'] = NULL;
$arguments108['row'] = NULL;
$arguments108['size'] = 'small';
$arguments108['alternativeMarkupIdentifier'] = NULL;
$arguments108['table'] = 'pages';
$array110 = array (
);$arguments108['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array110);

$output106 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output106 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                                                    ';
$array140 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array140)]);

$output139 .= ' [ID: ';
$array141 = array (
);
$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array141)]);

$output139 .= ']
                                                ';
return $output139;
};
$arguments133 = array();
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['route'] = NULL;
$arguments133['parameters'] = array (
);
$arguments133['referenceType'] = 'absolute';
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['route'] = 'site_configuration';
// Rendering Array
$array135 = array();
$array135['action'] = 'edit';
$array136 = array (
);$array135['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array136);
$arguments133['parameters'] = $array135;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments133['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                                            ';
return $output132;
};
$arguments130 = array();

$output129 .= '';

$output129 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                                                ';
$array145 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array145)]);

$output144 .= ' [ID: ';
$array146 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array146)]);

$output144 .= ']
                                            ';
return $output144;
};
$arguments142 = array();
$arguments142['if'] = NULL;

$output129 .= '';

$output129 .= '
                                        ';
return $output129;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                                                    ';
$array121 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array121)]);

$output120 .= ' [ID: ';
$array122 = array (
);
$output120 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array122)]);

$output120 .= ']
                                                ';
return $output120;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['route'] = NULL;
$arguments114['parameters'] = array (
);
$arguments114['referenceType'] = 'absolute';
$arguments114['name'] = NULL;
$arguments114['rel'] = NULL;
$arguments114['rev'] = NULL;
$arguments114['target'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['route'] = 'site_configuration';
// Rendering Array
$array116 = array();
$array116['action'] = 'edit';
$array117 = array (
);$array116['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array117);
$arguments114['parameters'] = $array116;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['languageKey'] = NULL;
$arguments118['alternativeLanguageKeys'] = NULL;
$arguments118['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments114['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                                            ';
return $output113;
};
$arguments111['__elseClosures'][] = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                                                ';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array124)]);

$output123 .= ' [ID: ';
$array125 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array125)]);

$output123 .= ']
                                            ';
return $output123;
};

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output106 .= '
                                    ';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['table'] = NULL;
$arguments150['row'] = NULL;
$arguments150['size'] = 'small';
$arguments150['alternativeMarkupIdentifier'] = NULL;
$arguments150['table'] = 'pages';
$array152 = array (
);$arguments150['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array152);

$output149 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
                                        ';
$array153 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array153)]);

$output149 .= '<br>
                                    ';
return $output149;
};
$arguments147 = array();
$arguments147['if'] = NULL;

$output103 .= '';

$output103 .= '
                                ';
return $output103;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array100);
$array99['1'] = ' == ';
$array101 = array (
);$array99['2'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array101);

$expression102 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                        <a href="#" class="t3js-contextmenutrigger" data-table="pages" data-uid="';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.uid', $array54)]);

$output53 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['table'] = NULL;
$arguments55['row'] = NULL;
$arguments55['size'] = 'small';
$arguments55['alternativeMarkupIdentifier'] = NULL;
$arguments55['table'] = 'pages';
$array57 = array (
);$arguments55['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array57);

$output53 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output53 .= '
                                        </a>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                                    ';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array87)]);

$output86 .= ' [ID: ';
$array88 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array88)]);

$output86 .= ']
                                                ';
return $output86;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['route'] = NULL;
$arguments80['parameters'] = array (
);
$arguments80['referenceType'] = 'absolute';
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['route'] = 'site_configuration';
// Rendering Array
$array82 = array();
$array82['action'] = 'edit';
$array83 = array (
);$array82['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array83);
$arguments80['parameters'] = $array82;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments80['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                                            ';
return $output79;
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                                                ';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array92)]);

$output91 .= ' [ID: ';
$array93 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array93)]);

$output91 .= ']
                                            ';
return $output91;
};
$arguments89 = array();
$arguments89['if'] = NULL;

$output76 .= '';

$output76 .= '
                                        ';
return $output76;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                                                    ';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array68)]);

$output67 .= ' [ID: ';
$array69 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array69)]);

$output67 .= ']
                                                ';
return $output67;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['route'] = NULL;
$arguments61['parameters'] = array (
);
$arguments61['referenceType'] = 'absolute';
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['route'] = 'site_configuration';
// Rendering Array
$array63 = array();
$array63['action'] = 'edit';
$array64 = array (
);$array63['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array64);
$arguments61['parameters'] = $array63;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments61['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                                            ';
return $output60;
};
$arguments58['__elseClosures'][] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                                                ';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array71)]);

$output70 .= ' [ID: ';
$array72 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.uid', $array72)]);

$output70 .= ']
                                            ';
return $output70;
};

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output53 .= '
                                    ';
return $output53;
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['table'] = NULL;
$arguments95['row'] = NULL;
$arguments95['size'] = 'small';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$arguments95['table'] = 'pages';
$array97 = array (
);$arguments95['row'] = $renderingContext->getVariableProvider()->getByPath('rootLinePage', $array97);

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
                                        ';
$array98 = array (
);
$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.title', $array98)]);

$output94 .= '<br>
                                    ';
return $output94;
};

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output49 .= '
                            ';
return $output49;
};
$arguments46 = array();
$arguments46['each'] = NULL;
$arguments46['as'] = NULL;
$arguments46['key'] = NULL;
$arguments46['reverse'] = false;
$arguments46['iteration'] = NULL;
$array48 = array (
);$arguments46['each'] = $renderingContext->getVariableProvider()->getByPath('page.rootline', $array48);
$arguments46['as'] = 'rootLinePage';
$arguments46['iteration'] = 'i';

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                                    <code>';
$array173 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array173)]);

$output172 .= '</code>
                                ';
return $output172;
};
$arguments170 = array();

$output169 .= '';

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output181 .= '
                                        ';
return $output181;
};
$arguments177 = array();
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['route'] = NULL;
$arguments177['parameters'] = array (
);
$arguments177['referenceType'] = 'absolute';
$arguments177['name'] = NULL;
$arguments177['rel'] = NULL;
$arguments177['rev'] = NULL;
$arguments177['target'] = NULL;
$arguments177['class'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$arguments177['route'] = 'site_configuration';
// Rendering Array
$array179 = array();
$array179['action'] = 'edit';
$array180 = array (
);$array179['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array180);
$arguments177['parameters'] = $array179;
$arguments177['title'] = 'Create configuration';
$arguments177['class'] = 'btn btn-primary';

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
                                    </div>
                                ';
return $output176;
};
$arguments174 = array();
$arguments174['if'] = NULL;

$output169 .= '';

$output169 .= '
                            ';
return $output169;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array167);

$expression168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments154['__thenClosure'] = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
                                    <code>';
$array157 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array157)]);

$output156 .= '</code>
                                ';
return $output156;
};
$arguments154['__elseClosures'][] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                                    <div>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['key'] = NULL;
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$arguments164['languageKey'] = NULL;
$arguments164['alternativeLanguageKeys'] = NULL;
$arguments164['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output163 .= '
                                        ';
return $output163;
};
$arguments159 = array();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['route'] = NULL;
$arguments159['parameters'] = array (
);
$arguments159['referenceType'] = 'absolute';
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['route'] = 'site_configuration';
// Rendering Array
$array161 = array();
$array161['action'] = 'edit';
$array162 = array (
);$array161['pageUid'] = $renderingContext->getVariableProvider()->getByPath('page.uid', $array162);
$arguments159['parameters'] = $array161;
$arguments159['title'] = 'Create configuration';
$arguments159['class'] = 'btn btn-primary';

$output158 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
                                    </div>
                                ';
return $output158;
};

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output45 .= '
                        </td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                                <table class="table table-striped table-no-borders">
                                    <tr>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['key'] = NULL;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['languageKey'] = NULL;
$arguments190['alternativeLanguageKeys'] = NULL;
$arguments190['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language';

$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output189 .= '</th>
                                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['languageKey'] = NULL;
$arguments192['alternativeLanguageKeys'] = NULL;
$arguments192['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.fullUrlPrefix';

$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output189 .= '</th>
                                    </tr>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
                                    <tr>
                                        <td>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['identifier'] = NULL;
$arguments219['size'] = 'small';
$arguments219['overlay'] = NULL;
$arguments219['state'] = 'default';
$arguments219['alternativeMarkupIdentifier'] = NULL;
$array221 = array (
);$arguments219['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array221);

$output218 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= ' ';
$array222 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array222)]);

$output218 .= '
                                                ';
return $output218;
};
$arguments216 = array();

$output215 .= '';

$output215 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['identifier'] = NULL;
$arguments226['size'] = 'small';
$arguments226['overlay'] = NULL;
$arguments226['state'] = 'default';
$arguments226['alternativeMarkupIdentifier'] = NULL;
$array228 = array (
);$arguments226['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array228);
$arguments226['overlay'] = 'overlay-hidden';

$output225 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= ' <span class="text-muted">';
$array229 = array (
);
$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array229)]);

$output225 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments230 = array();
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['languageKey'] = NULL;
$arguments230['alternativeLanguageKeys'] = NULL;
$arguments230['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output225 .= ')</span>
                                                ';
return $output225;
};
$arguments223 = array();
$arguments223['if'] = NULL;

$output215 .= '';

$output215 .= '
                                            ';
return $output215;
};
$arguments198 = array();
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$arguments198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array213 = array (
);$array212['0'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled', $array213);

$expression214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments198['__thenClosure'] = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['identifier'] = NULL;
$arguments201['size'] = 'small';
$arguments201['overlay'] = NULL;
$arguments201['state'] = 'default';
$arguments201['alternativeMarkupIdentifier'] = NULL;
$array203 = array (
);$arguments201['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array203);

$output200 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= ' ';
$array204 = array (
);
$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array204)]);

$output200 .= '
                                                ';
return $output200;
};
$arguments198['__elseClosures'][] = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['identifier'] = NULL;
$arguments206['size'] = 'small';
$arguments206['overlay'] = NULL;
$arguments206['state'] = 'default';
$arguments206['alternativeMarkupIdentifier'] = NULL;
$array208 = array (
);$arguments206['identifier'] = $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier', $array208);
$arguments206['overlay'] = 'overlay-hidden';

$output205 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= ' <span class="text-muted">';
$array209 = array (
);
$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title', $array209)]);

$output205 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return 'disabled';
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$arguments210['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output205 .= ')</span>
                                                ';
return $output205;
};

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
                                        </td>
                                        <td><a href="';
$array232 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array232)]);

$output197 .= '" target="_blank">';
$array233 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base', $array233)]);

$output197 .= '</a></td>
                                    </tr>
                                ';
return $output197;
};
$arguments194 = array();
$arguments194['each'] = NULL;
$arguments194['as'] = NULL;
$arguments194['key'] = NULL;
$arguments194['reverse'] = false;
$arguments194['iteration'] = NULL;
$array196 = array (
);$arguments194['each'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages', $array196);
$arguments194['as'] = 'siteLanguage';

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output189 .= '
                                </table>
                            ';
return $output189;
};
$arguments184 = array();
$arguments184['then'] = NULL;
$arguments184['else'] = NULL;
$arguments184['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration', $array187);

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments184['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array186)
					),
					$renderingContext
				);
$arguments184['__thenClosure'] = $renderChildrenClosure185;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output45 .= '
                        </td>
                        <td class="col-control nowrap">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['identifier'] = NULL;
$arguments247['size'] = 'small';
$arguments247['overlay'] = NULL;
$arguments247['state'] = 'default';
$arguments247['alternativeMarkupIdentifier'] = NULL;
$arguments247['identifier'] = 'actions-open';

$output246 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '
                                    ';
return $output246;
};
$arguments240 = array();
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['route'] = NULL;
$arguments240['parameters'] = array (
);
$arguments240['referenceType'] = 'absolute';
$arguments240['name'] = NULL;
$arguments240['rel'] = NULL;
$arguments240['rev'] = NULL;
$arguments240['target'] = NULL;
$arguments240['class'] = NULL;
$arguments240['dir'] = NULL;
$arguments240['id'] = NULL;
$arguments240['lang'] = NULL;
$arguments240['style'] = NULL;
$arguments240['title'] = NULL;
$arguments240['accesskey'] = NULL;
$arguments240['tabindex'] = NULL;
$arguments240['onclick'] = NULL;
$arguments240['route'] = 'site_configuration';
// Rendering Array
$array242 = array();
$array242['action'] = 'edit';
$array243 = array (
);$array242['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array243);
$arguments240['parameters'] = $array242;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['key'] = NULL;
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['languageKey'] = NULL;
$arguments244['alternativeLanguageKeys'] = NULL;
$arguments244['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';
$arguments240['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);
$arguments240['class'] = 'btn btn-default';

$output239 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['identifier'] = NULL;
$arguments261['size'] = 'small';
$arguments261['overlay'] = NULL;
$arguments261['state'] = 'default';
$arguments261['alternativeMarkupIdentifier'] = NULL;
$arguments261['identifier'] = 'actions-delete';

$output260 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
                                    ';
return $output260;
};
$arguments249 = array();
$arguments249['additionalAttributes'] = NULL;
$arguments249['data'] = NULL;
$arguments249['route'] = NULL;
$arguments249['parameters'] = array (
);
$arguments249['referenceType'] = 'absolute';
$arguments249['name'] = NULL;
$arguments249['rel'] = NULL;
$arguments249['rev'] = NULL;
$arguments249['target'] = NULL;
$arguments249['class'] = NULL;
$arguments249['dir'] = NULL;
$arguments249['id'] = NULL;
$arguments249['lang'] = NULL;
$arguments249['style'] = NULL;
$arguments249['title'] = NULL;
$arguments249['accesskey'] = NULL;
$arguments249['tabindex'] = NULL;
$arguments249['onclick'] = NULL;
$arguments249['route'] = 'site_configuration';
// Rendering Array
$array251 = array();
$array251['action'] = 'delete';
$array252 = array (
);$array251['site'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array252);
$arguments249['parameters'] = $array251;
$arguments249['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$arguments253['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments249['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);
// Rendering Array
$array255 = array();
$array255['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['languageKey'] = NULL;
$arguments256['alternativeLanguageKeys'] = NULL;
$arguments256['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array255['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array255['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);
$arguments249['data'] = $array255;

$output239 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output239 .= '
                                ';
return $output239;
};
$arguments234 = array();
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$arguments234['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['0'] = $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier', $array237);

$expression238 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments234['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments234['__thenClosure'] = $renderChildrenClosure235;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output45 .= '
                            </div>
                        </td>
                    </tr>
                ';
return $output45;
};
$arguments42 = array();
$arguments42['each'] = NULL;
$arguments42['as'] = NULL;
$arguments42['key'] = NULL;
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
$array44 = array (
);$arguments42['each'] = $renderingContext->getVariableProvider()->getByPath('pages', $array44);
$arguments42['as'] = 'page';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output5 .= '
                </tbody>
            </table>
        </div>
    ';
return $output5;
};
$arguments3['__elseClosures'][] = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['key'] = NULL;
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['languageKey'] = NULL;
$arguments269['alternativeLanguageKeys'] = NULL;
$arguments269['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message';

$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext)]);

$output268 .= '</p>
        ';
return $output268;
};
$arguments264 = array();
$arguments264['message'] = NULL;
$arguments264['title'] = NULL;
$arguments264['state'] = -2;
$arguments264['iconName'] = NULL;
$arguments264['disableIcon'] = false;
$arguments264['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['key'] = NULL;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$arguments266['languageKey'] = NULL;
$arguments266['alternativeLanguageKeys'] = NULL;
$arguments266['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title';
$arguments264['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);
$renderChildrenClosure265 = ($arguments264['message'] !== null) ? function() use ($arguments264) { return $arguments264['message']; } : $renderChildrenClosure265;
$output263 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '
    ';
return $output263;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
$output550 = '';

$output550 .= '
    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments551 = array();
$arguments551['key'] = NULL;
$arguments551['id'] = NULL;
$arguments551['default'] = NULL;
$arguments551['arguments'] = NULL;
$arguments551['extensionName'] = NULL;
$arguments551['languageKey'] = NULL;
$arguments551['alternativeLanguageKeys'] = NULL;
$arguments551['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.title';

$output550 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext)]);

$output550 .= '</h3>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['key'] = NULL;
$arguments553['id'] = NULL;
$arguments553['default'] = NULL;
$arguments553['arguments'] = NULL;
$arguments553['extensionName'] = NULL;
$arguments553['languageKey'] = NULL;
$arguments553['alternativeLanguageKeys'] = NULL;
$arguments553['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.description';

$output550 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext)]);

$output550 .= '</p>

    <table class="table table-striped table-hover table-condensed">
        <thead>
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments555 = array();
$arguments555['key'] = NULL;
$arguments555['id'] = NULL;
$arguments555['default'] = NULL;
$arguments555['arguments'] = NULL;
$arguments555['extensionName'] = NULL;
$arguments555['languageKey'] = NULL;
$arguments555['alternativeLanguageKeys'] = NULL;
$arguments555['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.configuration';

$output550 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext)]);

$output550 .= '</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
$output560 = '';

$output560 .= '
            <tr>
                <td>	<code>';
$array561 = array (
);
$output560 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier', $array561)]);

$output560 .= '</code></td>
                <td class="col-control nowrap">
                    <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['identifier'] = NULL;
$arguments574['size'] = 'small';
$arguments574['overlay'] = NULL;
$arguments574['state'] = 'default';
$arguments574['alternativeMarkupIdentifier'] = NULL;
$arguments574['identifier'] = 'actions-delete';

$output573 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output573 .= '
                            ';
return $output573;
};
$arguments562 = array();
$arguments562['additionalAttributes'] = NULL;
$arguments562['data'] = NULL;
$arguments562['route'] = NULL;
$arguments562['parameters'] = array (
);
$arguments562['referenceType'] = 'absolute';
$arguments562['name'] = NULL;
$arguments562['rel'] = NULL;
$arguments562['rev'] = NULL;
$arguments562['target'] = NULL;
$arguments562['class'] = NULL;
$arguments562['dir'] = NULL;
$arguments562['id'] = NULL;
$arguments562['lang'] = NULL;
$arguments562['style'] = NULL;
$arguments562['title'] = NULL;
$arguments562['accesskey'] = NULL;
$arguments562['tabindex'] = NULL;
$arguments562['onclick'] = NULL;
$arguments562['route'] = 'site_configuration';
// Rendering Array
$array564 = array();
$array564['action'] = 'delete';
$array565 = array (
);$array564['site'] = $renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier', $array565);
$arguments562['parameters'] = $array564;
$arguments562['class'] = 'btn btn-default t3js-modal-trigger';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['key'] = NULL;
$arguments566['id'] = NULL;
$arguments566['default'] = NULL;
$arguments566['arguments'] = NULL;
$arguments566['extensionName'] = NULL;
$arguments566['languageKey'] = NULL;
$arguments566['alternativeLanguageKeys'] = NULL;
$arguments566['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$arguments562['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);
// Rendering Array
$array568 = array();
$array568['severity'] = 'error';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['key'] = NULL;
$arguments569['id'] = NULL;
$arguments569['default'] = NULL;
$arguments569['arguments'] = NULL;
$arguments569['extensionName'] = NULL;
$arguments569['languageKey'] = NULL;
$arguments569['alternativeLanguageKeys'] = NULL;
$arguments569['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration';
$array568['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['key'] = NULL;
$arguments571['id'] = NULL;
$arguments571['default'] = NULL;
$arguments571['arguments'] = NULL;
$arguments571['extensionName'] = NULL;
$arguments571['languageKey'] = NULL;
$arguments571['alternativeLanguageKeys'] = NULL;
$arguments571['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete';
$array568['button-ok-text'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext);
$arguments562['data'] = $array568;

$output560 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output560 .= '
                    </div>
                </td>
            </tr>
        ';
return $output560;
};
$arguments557 = array();
$arguments557['each'] = NULL;
$arguments557['as'] = NULL;
$arguments557['key'] = NULL;
$arguments557['reverse'] = false;
$arguments557['iteration'] = NULL;
$array559 = array (
);$arguments557['each'] = $renderingContext->getVariableProvider()->getByPath('unassignedSites', $array559);
$arguments557['as'] = 'unassignedSite';

$output550 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext);

$output550 .= '
        </tbody>
    </table>
';
return $output550;
};
$arguments545 = array();
$arguments545['then'] = NULL;
$arguments545['else'] = NULL;
$arguments545['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array547 = array();
$array548 = array (
);$array547['0'] = $renderingContext->getVariableProvider()->getByPath('unassignedSites', $array548);

$expression549 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments545['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression549(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array547)
					),
					$renderingContext
				);
$arguments545['__thenClosure'] = $renderChildrenClosure546;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#