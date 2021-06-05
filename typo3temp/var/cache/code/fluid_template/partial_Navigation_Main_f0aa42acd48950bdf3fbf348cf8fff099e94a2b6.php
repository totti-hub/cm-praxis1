<?php

class partial_Navigation_Main_f0aa42acd48950bdf3fbf348cf8fff099e94a2b6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments258 = array();

$output257 .= '';

$output257 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array266);

$expression267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments263['then'] = ' active';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array271 = array (
);$array270['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array271);

$expression272 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);
$arguments268['then'] = ' dropdown dropdown-hover';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output262 .= '">
                            <a href="';
$array273 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array273)]);

$output262 .= '" id="nav-item-';
$array274 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array274)]);

$output262 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['then'] = ' dropdown-toggle';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output262 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$arguments280['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array283 = array (
);$array282['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array283);

$expression284 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments280['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$output285 = '';

$output285 .= ' target="';
$array286 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array286)]);

$output285 .= '"';
$arguments280['then'] = $output285;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output262 .= ' title="';
$array287 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array287)]);

$output262 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array291);

$expression292 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array290)
					),
					$renderingContext
				);
$arguments288['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output262 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['image'] = NULL;
$arguments324['src'] = NULL;
$arguments324['class'] = NULL;
$arguments324['width'] = NULL;
$arguments324['height'] = NULL;
$array326 = array (
);$arguments324['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array326);
$array327 = array (
);$arguments324['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array327);
$array328 = array (
);$arguments324['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array328);

$output323 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
                                            ';
return $output323;
};
$arguments321 = array();

$output320 .= '';

$output320 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['additionalAttributes'] = NULL;
$arguments332['data'] = NULL;
$arguments332['class'] = NULL;
$arguments332['dir'] = NULL;
$arguments332['id'] = NULL;
$arguments332['lang'] = NULL;
$arguments332['style'] = NULL;
$arguments332['title'] = NULL;
$arguments332['accesskey'] = NULL;
$arguments332['tabindex'] = NULL;
$arguments332['onclick'] = NULL;
$arguments332['alt'] = NULL;
$arguments332['ismap'] = NULL;
$arguments332['longdesc'] = NULL;
$arguments332['usemap'] = NULL;
$arguments332['loading'] = NULL;
$arguments332['src'] = '';
$arguments332['treatIdAsReference'] = false;
$arguments332['image'] = NULL;
$arguments332['crop'] = NULL;
$arguments332['cropVariant'] = 'default';
$arguments332['fileExtension'] = NULL;
$arguments332['width'] = NULL;
$arguments332['height'] = NULL;
$arguments332['minWidth'] = NULL;
$arguments332['minHeight'] = NULL;
$arguments332['maxWidth'] = NULL;
$arguments332['maxHeight'] = NULL;
$arguments332['absolute'] = false;
// Rendering Array
$array334 = array();
$array334['loading'] = 'lazy';
$arguments332['additionalAttributes'] = $array334;
$array335 = array (
);$arguments332['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array335);
$array336 = array (
);$arguments332['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array336);
$array337 = array (
);$arguments332['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array337);
$array338 = array (
);$arguments332['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array338);
$array339 = array (
);$arguments332['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array339);

$output331 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
                                            ';
return $output331;
};
$arguments329 = array();
$arguments329['if'] = NULL;

$output320 .= '';

$output320 .= '
                                        ';
return $output320;
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array318 = array (
);$array317['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array318);
$array317['1'] = ' === svg';

$expression319 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments300['__thenClosure'] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['image'] = NULL;
$arguments303['src'] = NULL;
$arguments303['class'] = NULL;
$arguments303['width'] = NULL;
$arguments303['height'] = NULL;
$array305 = array (
);$arguments303['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array305);
$array306 = array (
);$arguments303['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array306);
$array307 = array (
);$arguments303['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array307);

$output302 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
                                            ';
return $output302;
};
$arguments300['__elseClosures'][] = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['additionalAttributes'] = NULL;
$arguments309['data'] = NULL;
$arguments309['class'] = NULL;
$arguments309['dir'] = NULL;
$arguments309['id'] = NULL;
$arguments309['lang'] = NULL;
$arguments309['style'] = NULL;
$arguments309['title'] = NULL;
$arguments309['accesskey'] = NULL;
$arguments309['tabindex'] = NULL;
$arguments309['onclick'] = NULL;
$arguments309['alt'] = NULL;
$arguments309['ismap'] = NULL;
$arguments309['longdesc'] = NULL;
$arguments309['usemap'] = NULL;
$arguments309['loading'] = NULL;
$arguments309['src'] = '';
$arguments309['treatIdAsReference'] = false;
$arguments309['image'] = NULL;
$arguments309['crop'] = NULL;
$arguments309['cropVariant'] = 'default';
$arguments309['fileExtension'] = NULL;
$arguments309['width'] = NULL;
$arguments309['height'] = NULL;
$arguments309['minWidth'] = NULL;
$arguments309['minHeight'] = NULL;
$arguments309['maxWidth'] = NULL;
$arguments309['maxHeight'] = NULL;
$arguments309['absolute'] = false;
// Rendering Array
$array311 = array();
$array311['loading'] = 'lazy';
$arguments309['additionalAttributes'] = $array311;
$array312 = array (
);$arguments309['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array312);
$array313 = array (
);$arguments309['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array313);
$array314 = array (
);$arguments309['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array314);
$array315 = array (
);$arguments309['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array315);
$array316 = array (
);$arguments309['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array316);

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
                                            ';
return $output308;
};

$output299 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
                                    </span>
                                ';
return $output299;
};
$arguments293 = array();
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$arguments293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array295 = array();
$array296 = array (
);$array295['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array296);
$array295['1'] = ' && ';
$array297 = array (
);$array295['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array297);

$expression298 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression298(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array295)
					),
					$renderingContext
				);
$arguments293['__thenClosure'] = $renderChildrenClosure294;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output262 .= '
                                <span class="nav-link-text">';
$array340 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array340)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array344);

$expression345 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$arguments341['__thenClosure'] = $renderChildrenClosure342;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output262 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array352 = array (
);
$output351 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array352)]);

$output351 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments431 = array();

$output430 .= '';

$output430 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
                                                <li>
                                                    <a href="';
$array436 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array436)]);

$output435 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['then'] = NULL;
$arguments437['else'] = NULL;
$arguments437['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array439 = array();
$array440 = array (
);$array439['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array440);

$expression441 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments437['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression441(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array439)
					),
					$renderingContext
				);
$arguments437['then'] = ' active';

$output435 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output435 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$arguments442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array444 = array();
$array445 = array (
);$array444['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array445);

$expression446 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array444)
					),
					$renderingContext
				);
$output447 = '';

$output447 .= ' target="';
$array448 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array448)]);

$output447 .= '"';
$arguments442['then'] = $output447;

$output435 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output435 .= ' title="';
$array449 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array449)]);

$output435 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['image'] = NULL;
$arguments481['src'] = NULL;
$arguments481['class'] = NULL;
$arguments481['width'] = NULL;
$arguments481['height'] = NULL;
$array483 = array (
);$arguments481['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array483);
$array484 = array (
);$arguments481['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array484);
$array485 = array (
);$arguments481['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array485);

$output480 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output480 .= '
                                                                    ';
return $output480;
};
$arguments478 = array();

$output477 .= '';

$output477 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
$output488 = '';

$output488 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['additionalAttributes'] = NULL;
$arguments489['data'] = NULL;
$arguments489['class'] = NULL;
$arguments489['dir'] = NULL;
$arguments489['id'] = NULL;
$arguments489['lang'] = NULL;
$arguments489['style'] = NULL;
$arguments489['title'] = NULL;
$arguments489['accesskey'] = NULL;
$arguments489['tabindex'] = NULL;
$arguments489['onclick'] = NULL;
$arguments489['alt'] = NULL;
$arguments489['ismap'] = NULL;
$arguments489['longdesc'] = NULL;
$arguments489['usemap'] = NULL;
$arguments489['loading'] = NULL;
$arguments489['src'] = '';
$arguments489['treatIdAsReference'] = false;
$arguments489['image'] = NULL;
$arguments489['crop'] = NULL;
$arguments489['cropVariant'] = 'default';
$arguments489['fileExtension'] = NULL;
$arguments489['width'] = NULL;
$arguments489['height'] = NULL;
$arguments489['minWidth'] = NULL;
$arguments489['minHeight'] = NULL;
$arguments489['maxWidth'] = NULL;
$arguments489['maxHeight'] = NULL;
$arguments489['absolute'] = false;
// Rendering Array
$array491 = array();
$array491['loading'] = 'lazy';
$arguments489['additionalAttributes'] = $array491;
$array492 = array (
);$arguments489['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array492);
$array493 = array (
);$arguments489['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array493);
$array494 = array (
);$arguments489['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array494);
$array495 = array (
);$arguments489['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array495);
$array496 = array (
);$arguments489['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array496);

$output488 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext);

$output488 .= '
                                                                    ';
return $output488;
};
$arguments486 = array();
$arguments486['if'] = NULL;

$output477 .= '';

$output477 .= '
                                                                ';
return $output477;
};
$arguments457 = array();
$arguments457['then'] = NULL;
$arguments457['else'] = NULL;
$arguments457['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array474 = array();
$array475 = array (
);$array474['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array475);
$array474['1'] = ' === svg';

$expression476 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments457['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);
$arguments457['__thenClosure'] = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['image'] = NULL;
$arguments460['src'] = NULL;
$arguments460['class'] = NULL;
$arguments460['width'] = NULL;
$arguments460['height'] = NULL;
$array462 = array (
);$arguments460['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array462);
$array463 = array (
);$arguments460['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array463);
$array464 = array (
);$arguments460['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array464);

$output459 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output459 .= '
                                                                    ';
return $output459;
};
$arguments457['__elseClosures'][] = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['additionalAttributes'] = NULL;
$arguments466['data'] = NULL;
$arguments466['class'] = NULL;
$arguments466['dir'] = NULL;
$arguments466['id'] = NULL;
$arguments466['lang'] = NULL;
$arguments466['style'] = NULL;
$arguments466['title'] = NULL;
$arguments466['accesskey'] = NULL;
$arguments466['tabindex'] = NULL;
$arguments466['onclick'] = NULL;
$arguments466['alt'] = NULL;
$arguments466['ismap'] = NULL;
$arguments466['longdesc'] = NULL;
$arguments466['usemap'] = NULL;
$arguments466['loading'] = NULL;
$arguments466['src'] = '';
$arguments466['treatIdAsReference'] = false;
$arguments466['image'] = NULL;
$arguments466['crop'] = NULL;
$arguments466['cropVariant'] = 'default';
$arguments466['fileExtension'] = NULL;
$arguments466['width'] = NULL;
$arguments466['height'] = NULL;
$arguments466['minWidth'] = NULL;
$arguments466['minHeight'] = NULL;
$arguments466['maxWidth'] = NULL;
$arguments466['maxHeight'] = NULL;
$arguments466['absolute'] = false;
// Rendering Array
$array468 = array();
$array468['loading'] = 'lazy';
$arguments466['additionalAttributes'] = $array468;
$array469 = array (
);$arguments466['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array469);
$array470 = array (
);$arguments466['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array470);
$array471 = array (
);$arguments466['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array471);
$array472 = array (
);$arguments466['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array472);
$array473 = array (
);$arguments466['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array473);

$output465 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= '
                                                                    ';
return $output465;
};

$output456 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output456 .= '
                                                            </span>
                                                        ';
return $output456;
};
$arguments450 = array();
$arguments450['then'] = NULL;
$arguments450['else'] = NULL;
$arguments450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array452 = array();
$array453 = array (
);$array452['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array453);
$array452['1'] = ' && ';
$array454 = array (
);$array452['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array454);

$expression455 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression455(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array452)
					),
					$renderingContext
				);
$arguments450['__thenClosure'] = $renderChildrenClosure451;

$output435 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output435 .= '
                                                        <span class="dropdown-text">';
$array497 = array (
);
$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array497)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments498 = array();
$arguments498['then'] = NULL;
$arguments498['else'] = NULL;
$arguments498['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array500 = array();
$array501 = array (
);$array500['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array501);

$expression502 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments498['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression502(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array500)
					),
					$renderingContext
				);
$arguments498['__thenClosure'] = $renderChildrenClosure499;

$output435 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output435 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output435;
};
$arguments433 = array();
$arguments433['if'] = NULL;

$output430 .= '';

$output430 .= '
                                        ';
return $output430;
};
$arguments357 = array();
$arguments357['then'] = NULL;
$arguments357['else'] = NULL;
$arguments357['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array428);

$expression429 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments357['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression429(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array427)
					),
					$renderingContext
				);
$arguments357['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments357['__elseClosures'][] = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
                                                <li>
                                                    <a href="';
$array360 = array (
);
$output359 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array360)]);

$output359 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array364);

$expression365 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression365(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments361['then'] = ' active';

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output359 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array369);

$expression370 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression370(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$output371 = '';

$output371 .= ' target="';
$array372 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array372)]);

$output371 .= '"';
$arguments366['then'] = $output371;

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output359 .= ' title="';
$array373 = array (
);
$output359 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array373)]);

$output359 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['image'] = NULL;
$arguments405['src'] = NULL;
$arguments405['class'] = NULL;
$arguments405['width'] = NULL;
$arguments405['height'] = NULL;
$array407 = array (
);$arguments405['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array407);
$array408 = array (
);$arguments405['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array408);
$array409 = array (
);$arguments405['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array409);

$output404 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
                                                                    ';
return $output404;
};
$arguments402 = array();

$output401 .= '';

$output401 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments413 = array();
$arguments413['additionalAttributes'] = NULL;
$arguments413['data'] = NULL;
$arguments413['class'] = NULL;
$arguments413['dir'] = NULL;
$arguments413['id'] = NULL;
$arguments413['lang'] = NULL;
$arguments413['style'] = NULL;
$arguments413['title'] = NULL;
$arguments413['accesskey'] = NULL;
$arguments413['tabindex'] = NULL;
$arguments413['onclick'] = NULL;
$arguments413['alt'] = NULL;
$arguments413['ismap'] = NULL;
$arguments413['longdesc'] = NULL;
$arguments413['usemap'] = NULL;
$arguments413['loading'] = NULL;
$arguments413['src'] = '';
$arguments413['treatIdAsReference'] = false;
$arguments413['image'] = NULL;
$arguments413['crop'] = NULL;
$arguments413['cropVariant'] = 'default';
$arguments413['fileExtension'] = NULL;
$arguments413['width'] = NULL;
$arguments413['height'] = NULL;
$arguments413['minWidth'] = NULL;
$arguments413['minHeight'] = NULL;
$arguments413['maxWidth'] = NULL;
$arguments413['maxHeight'] = NULL;
$arguments413['absolute'] = false;
// Rendering Array
$array415 = array();
$array415['loading'] = 'lazy';
$arguments413['additionalAttributes'] = $array415;
$array416 = array (
);$arguments413['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array416);
$array417 = array (
);$arguments413['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array417);
$array418 = array (
);$arguments413['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array418);
$array419 = array (
);$arguments413['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array419);
$array420 = array (
);$arguments413['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array420);

$output412 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output412 .= '
                                                                    ';
return $output412;
};
$arguments410 = array();
$arguments410['if'] = NULL;

$output401 .= '';

$output401 .= '
                                                                ';
return $output401;
};
$arguments381 = array();
$arguments381['then'] = NULL;
$arguments381['else'] = NULL;
$arguments381['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array399);
$array398['1'] = ' === svg';

$expression400 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments381['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments381['__thenClosure'] = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['image'] = NULL;
$arguments384['src'] = NULL;
$arguments384['class'] = NULL;
$arguments384['width'] = NULL;
$arguments384['height'] = NULL;
$array386 = array (
);$arguments384['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array386);
$array387 = array (
);$arguments384['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array387);
$array388 = array (
);$arguments384['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array388);

$output383 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '
                                                                    ';
return $output383;
};
$arguments381['__elseClosures'][] = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['additionalAttributes'] = NULL;
$arguments390['data'] = NULL;
$arguments390['class'] = NULL;
$arguments390['dir'] = NULL;
$arguments390['id'] = NULL;
$arguments390['lang'] = NULL;
$arguments390['style'] = NULL;
$arguments390['title'] = NULL;
$arguments390['accesskey'] = NULL;
$arguments390['tabindex'] = NULL;
$arguments390['onclick'] = NULL;
$arguments390['alt'] = NULL;
$arguments390['ismap'] = NULL;
$arguments390['longdesc'] = NULL;
$arguments390['usemap'] = NULL;
$arguments390['loading'] = NULL;
$arguments390['src'] = '';
$arguments390['treatIdAsReference'] = false;
$arguments390['image'] = NULL;
$arguments390['crop'] = NULL;
$arguments390['cropVariant'] = 'default';
$arguments390['fileExtension'] = NULL;
$arguments390['width'] = NULL;
$arguments390['height'] = NULL;
$arguments390['minWidth'] = NULL;
$arguments390['minHeight'] = NULL;
$arguments390['maxWidth'] = NULL;
$arguments390['maxHeight'] = NULL;
$arguments390['absolute'] = false;
// Rendering Array
$array392 = array();
$array392['loading'] = 'lazy';
$arguments390['additionalAttributes'] = $array392;
$array393 = array (
);$arguments390['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array393);
$array394 = array (
);$arguments390['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array394);
$array395 = array (
);$arguments390['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array395);
$array396 = array (
);$arguments390['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array396);
$array397 = array (
);$arguments390['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array397);

$output389 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output389 .= '
                                                                    ';
return $output389;
};

$output380 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output380 .= '
                                                            </span>
                                                        ';
return $output380;
};
$arguments374 = array();
$arguments374['then'] = NULL;
$arguments374['else'] = NULL;
$arguments374['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array376 = array();
$array377 = array (
);$array376['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array377);
$array376['1'] = ' && ';
$array378 = array (
);$array376['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array378);

$expression379 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments374['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression379(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array376)
					),
					$renderingContext
				);
$arguments374['__thenClosure'] = $renderChildrenClosure375;

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);

$output359 .= '
                                                        <span class="dropdown-text">';
$array421 = array (
);
$output359 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array421)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments422 = array();
$arguments422['then'] = NULL;
$arguments422['else'] = NULL;
$arguments422['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array424 = array();
$array425 = array (
);$array424['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array425);

$expression426 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments422['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression426(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array424)
					),
					$renderingContext
				);
$arguments422['__thenClosure'] = $renderChildrenClosure423;

$output359 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output359 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output359;
};

$output356 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output356 .= '
                                    ';
return $output356;
};
$arguments353 = array();
$arguments353['each'] = NULL;
$arguments353['as'] = NULL;
$arguments353['key'] = NULL;
$arguments353['reverse'] = false;
$arguments353['iteration'] = NULL;
$array355 = array (
);$arguments353['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array355);
$arguments353['as'] = 'child';

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output351 .= '
                                </ul>
                            ';
return $output351;
};
$arguments346 = array();
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$arguments346['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array348 = array();
$array349 = array (
);$array348['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array349);

$expression350 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments346['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression350(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array348)
					),
					$renderingContext
				);
$arguments346['__thenClosure'] = $renderChildrenClosure347;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output262 .= '
                        </li>
                    ';
return $output262;
};
$arguments260 = array();
$arguments260['if'] = NULL;

$output257 .= '';

$output257 .= '
                ';
return $output257;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array255);

$expression256 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output13 .= ' title="';
$array38 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array38)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['image'] = NULL;
$arguments75['src'] = NULL;
$arguments75['class'] = NULL;
$arguments75['width'] = NULL;
$arguments75['height'] = NULL;
$array77 = array (
);$arguments75['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array77);
$array78 = array (
);$arguments75['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array78);
$array79 = array (
);$arguments75['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array79);

$output74 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
                                            ';
return $output74;
};
$arguments72 = array();

$output71 .= '';

$output71 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['alt'] = NULL;
$arguments83['ismap'] = NULL;
$arguments83['longdesc'] = NULL;
$arguments83['usemap'] = NULL;
$arguments83['loading'] = NULL;
$arguments83['src'] = '';
$arguments83['treatIdAsReference'] = false;
$arguments83['image'] = NULL;
$arguments83['crop'] = NULL;
$arguments83['cropVariant'] = 'default';
$arguments83['fileExtension'] = NULL;
$arguments83['width'] = NULL;
$arguments83['height'] = NULL;
$arguments83['minWidth'] = NULL;
$arguments83['minHeight'] = NULL;
$arguments83['maxWidth'] = NULL;
$arguments83['maxHeight'] = NULL;
$arguments83['absolute'] = false;
// Rendering Array
$array85 = array();
$array85['loading'] = 'lazy';
$arguments83['additionalAttributes'] = $array85;
$array86 = array (
);$arguments83['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array86);
$array87 = array (
);$arguments83['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array87);
$array88 = array (
);$arguments83['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array88);
$array89 = array (
);$arguments83['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array89);
$array90 = array (
);$arguments83['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array90);

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                                            ';
return $output82;
};
$arguments80 = array();
$arguments80['if'] = NULL;

$output71 .= '';

$output71 .= '
                                        ';
return $output71;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array69);
$array68['1'] = ' === svg';

$expression70 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['image'] = NULL;
$arguments54['src'] = NULL;
$arguments54['class'] = NULL;
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$array56 = array (
);$arguments54['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array56);
$array57 = array (
);$arguments54['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array57);
$array58 = array (
);$arguments54['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array58);

$output53 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                                            ';
return $output53;
};
$arguments51['__elseClosures'][] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['alt'] = NULL;
$arguments60['ismap'] = NULL;
$arguments60['longdesc'] = NULL;
$arguments60['usemap'] = NULL;
$arguments60['loading'] = NULL;
$arguments60['src'] = '';
$arguments60['treatIdAsReference'] = false;
$arguments60['image'] = NULL;
$arguments60['crop'] = NULL;
$arguments60['cropVariant'] = 'default';
$arguments60['fileExtension'] = NULL;
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['absolute'] = false;
// Rendering Array
$array62 = array();
$array62['loading'] = 'lazy';
$arguments60['additionalAttributes'] = $array62;
$array63 = array (
);$arguments60['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array63);
$array64 = array (
);$arguments60['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array64);
$array65 = array (
);$arguments60['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array65);
$array66 = array (
);$arguments60['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array66);
$array67 = array (
);$arguments60['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array67);

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                                            ';
return $output59;
};

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                                    </span>
                                ';
return $output50;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array47);
$array46['1'] = ' && ';
$array48 = array (
);$array46['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array48);

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array91 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array91)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array95);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = $renderChildrenClosure93;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array103 = array (
);
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array103)]);

$output102 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments182 = array();

$output181 .= '';

$output181 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
                                                <li>
                                                    <a href="';
$array187 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array187)]);

$output186 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array191);

$expression192 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)
					),
					$renderingContext
				);
$arguments188['then'] = ' active';

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output186 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array196);

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$output198 = '';

$output198 .= ' target="';
$array199 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array199)]);

$output198 .= '"';
$arguments193['then'] = $output198;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output186 .= ' title="';
$array200 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array200)]);

$output186 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['image'] = NULL;
$arguments232['src'] = NULL;
$arguments232['class'] = NULL;
$arguments232['width'] = NULL;
$arguments232['height'] = NULL;
$array234 = array (
);$arguments232['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array234);
$array235 = array (
);$arguments232['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array235);
$array236 = array (
);$arguments232['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array236);

$output231 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
                                                                    ';
return $output231;
};
$arguments229 = array();

$output228 .= '';

$output228 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['class'] = NULL;
$arguments240['dir'] = NULL;
$arguments240['id'] = NULL;
$arguments240['lang'] = NULL;
$arguments240['style'] = NULL;
$arguments240['title'] = NULL;
$arguments240['accesskey'] = NULL;
$arguments240['tabindex'] = NULL;
$arguments240['onclick'] = NULL;
$arguments240['alt'] = NULL;
$arguments240['ismap'] = NULL;
$arguments240['longdesc'] = NULL;
$arguments240['usemap'] = NULL;
$arguments240['loading'] = NULL;
$arguments240['src'] = '';
$arguments240['treatIdAsReference'] = false;
$arguments240['image'] = NULL;
$arguments240['crop'] = NULL;
$arguments240['cropVariant'] = 'default';
$arguments240['fileExtension'] = NULL;
$arguments240['width'] = NULL;
$arguments240['height'] = NULL;
$arguments240['minWidth'] = NULL;
$arguments240['minHeight'] = NULL;
$arguments240['maxWidth'] = NULL;
$arguments240['maxHeight'] = NULL;
$arguments240['absolute'] = false;
// Rendering Array
$array242 = array();
$array242['loading'] = 'lazy';
$arguments240['additionalAttributes'] = $array242;
$array243 = array (
);$arguments240['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array243);
$array244 = array (
);$arguments240['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array244);
$array245 = array (
);$arguments240['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array245);
$array246 = array (
);$arguments240['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array246);
$array247 = array (
);$arguments240['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array247);

$output239 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
                                                                    ';
return $output239;
};
$arguments237 = array();
$arguments237['if'] = NULL;

$output228 .= '';

$output228 .= '
                                                                ';
return $output228;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array226 = array (
);$array225['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array226);
$array225['1'] = ' === svg';

$expression227 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['image'] = NULL;
$arguments211['src'] = NULL;
$arguments211['class'] = NULL;
$arguments211['width'] = NULL;
$arguments211['height'] = NULL;
$array213 = array (
);$arguments211['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array213);
$array214 = array (
);$arguments211['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array214);
$array215 = array (
);$arguments211['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array215);

$output210 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
                                                                    ';
return $output210;
};
$arguments208['__elseClosures'][] = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['additionalAttributes'] = NULL;
$arguments217['data'] = NULL;
$arguments217['class'] = NULL;
$arguments217['dir'] = NULL;
$arguments217['id'] = NULL;
$arguments217['lang'] = NULL;
$arguments217['style'] = NULL;
$arguments217['title'] = NULL;
$arguments217['accesskey'] = NULL;
$arguments217['tabindex'] = NULL;
$arguments217['onclick'] = NULL;
$arguments217['alt'] = NULL;
$arguments217['ismap'] = NULL;
$arguments217['longdesc'] = NULL;
$arguments217['usemap'] = NULL;
$arguments217['loading'] = NULL;
$arguments217['src'] = '';
$arguments217['treatIdAsReference'] = false;
$arguments217['image'] = NULL;
$arguments217['crop'] = NULL;
$arguments217['cropVariant'] = 'default';
$arguments217['fileExtension'] = NULL;
$arguments217['width'] = NULL;
$arguments217['height'] = NULL;
$arguments217['minWidth'] = NULL;
$arguments217['minHeight'] = NULL;
$arguments217['maxWidth'] = NULL;
$arguments217['maxHeight'] = NULL;
$arguments217['absolute'] = false;
// Rendering Array
$array219 = array();
$array219['loading'] = 'lazy';
$arguments217['additionalAttributes'] = $array219;
$array220 = array (
);$arguments217['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array220);
$array221 = array (
);$arguments217['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array221);
$array222 = array (
);$arguments217['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array222);
$array223 = array (
);$arguments217['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array223);
$array224 = array (
);$arguments217['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array224);

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                                                                    ';
return $output216;
};

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
                                                            </span>
                                                        ';
return $output207;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array204);
$array203['1'] = ' && ';
$array205 = array (
);$array203['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array205);

$expression206 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output186 .= '
                                                        <span class="dropdown-text">';
$array248 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array248)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = $renderChildrenClosure250;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output186 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output186;
};
$arguments184 = array();
$arguments184['if'] = NULL;

$output181 .= '';

$output181 .= '
                                        ';
return $output181;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments108['__elseClosures'][] = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                                <li>
                                                    <a href="';
$array111 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array111)]);

$output110 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['then'] = ' active';

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output110 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$output122 = '';

$output122 .= ' target="';
$array123 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array123)]);

$output122 .= '"';
$arguments117['then'] = $output122;

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output110 .= ' title="';
$array124 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array124)]);

$output110 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['image'] = NULL;
$arguments156['src'] = NULL;
$arguments156['class'] = NULL;
$arguments156['width'] = NULL;
$arguments156['height'] = NULL;
$array158 = array (
);$arguments156['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array158);
$array159 = array (
);$arguments156['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array159);
$array160 = array (
);$arguments156['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array160);

$output155 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
                                                                    ';
return $output155;
};
$arguments153 = array();

$output152 .= '';

$output152 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['alt'] = NULL;
$arguments164['ismap'] = NULL;
$arguments164['longdesc'] = NULL;
$arguments164['usemap'] = NULL;
$arguments164['loading'] = NULL;
$arguments164['src'] = '';
$arguments164['treatIdAsReference'] = false;
$arguments164['image'] = NULL;
$arguments164['crop'] = NULL;
$arguments164['cropVariant'] = 'default';
$arguments164['fileExtension'] = NULL;
$arguments164['width'] = NULL;
$arguments164['height'] = NULL;
$arguments164['minWidth'] = NULL;
$arguments164['minHeight'] = NULL;
$arguments164['maxWidth'] = NULL;
$arguments164['maxHeight'] = NULL;
$arguments164['absolute'] = false;
// Rendering Array
$array166 = array();
$array166['loading'] = 'lazy';
$arguments164['additionalAttributes'] = $array166;
$array167 = array (
);$arguments164['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array167);
$array168 = array (
);$arguments164['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array168);
$array169 = array (
);$arguments164['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array169);
$array170 = array (
);$arguments164['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array170);
$array171 = array (
);$arguments164['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array171);

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
                                                                    ';
return $output163;
};
$arguments161 = array();
$arguments161['if'] = NULL;

$output152 .= '';

$output152 .= '
                                                                ';
return $output152;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array150);
$array149['1'] = ' === svg';

$expression151 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['image'] = NULL;
$arguments135['src'] = NULL;
$arguments135['class'] = NULL;
$arguments135['width'] = NULL;
$arguments135['height'] = NULL;
$array137 = array (
);$arguments135['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array137);
$array138 = array (
);$arguments135['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array138);
$array139 = array (
);$arguments135['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array139);

$output134 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
                                                                    ';
return $output134;
};
$arguments132['__elseClosures'][] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['alt'] = NULL;
$arguments141['ismap'] = NULL;
$arguments141['longdesc'] = NULL;
$arguments141['usemap'] = NULL;
$arguments141['loading'] = NULL;
$arguments141['src'] = '';
$arguments141['treatIdAsReference'] = false;
$arguments141['image'] = NULL;
$arguments141['crop'] = NULL;
$arguments141['cropVariant'] = 'default';
$arguments141['fileExtension'] = NULL;
$arguments141['width'] = NULL;
$arguments141['height'] = NULL;
$arguments141['minWidth'] = NULL;
$arguments141['minHeight'] = NULL;
$arguments141['maxWidth'] = NULL;
$arguments141['maxHeight'] = NULL;
$arguments141['absolute'] = false;
// Rendering Array
$array143 = array();
$array143['loading'] = 'lazy';
$arguments141['additionalAttributes'] = $array143;
$array144 = array (
);$arguments141['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array144);
$array145 = array (
);$arguments141['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array145);
$array146 = array (
);$arguments141['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array146);
$array147 = array (
);$arguments141['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array147);
$array148 = array (
);$arguments141['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array148);

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                                                                    ';
return $output140;
};

$output131 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
                                                            </span>
                                                        ';
return $output131;
};
$arguments125 = array();
$arguments125['then'] = NULL;
$arguments125['else'] = NULL;
$arguments125['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array128);
$array127['1'] = ' && ';
$array129 = array (
);$array127['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array129);

$expression130 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments125['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments125['__thenClosure'] = $renderChildrenClosure126;

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output110 .= '
                                                        <span class="dropdown-text">';
$array172 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array172)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments173 = array();
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$arguments173['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments173['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments173['__thenClosure'] = $renderChildrenClosure174;

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output110 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output110;
};

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                                    ';
return $output107;
};
$arguments104 = array();
$arguments104['each'] = NULL;
$arguments104['as'] = NULL;
$arguments104['key'] = NULL;
$arguments104['reverse'] = false;
$arguments104['iteration'] = NULL;
$array106 = array (
);$arguments104['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array106);
$arguments104['as'] = 'child';

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output102 .= '
                                </ul>
                            ';
return $output102;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = $renderChildrenClosure98;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output503 = '';

$output503 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$output506 = '';

$output506 .= 'bp-page-header navbar navbar-mainnavigation navbar-';
$array507 = array (
);
$output506 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array507);
return $output506;
};
$arguments504 = array();
$arguments504['value'] = NULL;
$arguments504['name'] = NULL;
$arguments504['name'] = 'headerClass';
$renderChildrenClosure505 = ($arguments504['value'] !== null) ? function() use ($arguments504) { return $arguments504['value']; } : $renderChildrenClosure505;
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext)]);

$output503 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output510 = '';
$array511 = array (
);
$output510 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array511);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['then'] = NULL;
$arguments512['else'] = NULL;
$arguments512['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array515);

$expression516 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments512['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression516(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$arguments512['then'] = ' navbar-has-image';

$output510 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);
return $output510;
};
$arguments508 = array();
$arguments508['value'] = NULL;
$arguments508['name'] = NULL;
$arguments508['name'] = 'headerClass';
$renderChildrenClosure509 = ($arguments508['value'] !== null) ? function() use ($arguments508) { return $arguments508['value']; } : $renderChildrenClosure509;
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext)]);

$output503 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output519 = '';
$array520 = array (
);
$output519 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array520);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['then'] = NULL;
$arguments521['else'] = NULL;
$arguments521['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array523 = array();
$array524 = array (
);$array523['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array524);

$expression525 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments521['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression525(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array523)
					),
					$renderingContext
				);
$arguments521['else'] = ' navbar-top';
$output526 = '';

$output526 .= ' navbar-';
$array527 = array (
);
$output526 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array527);

$output526 .= ' navbar-fixed-';
$array528 = array (
);
$output526 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array528);
$arguments521['then'] = $output526;

$output519 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);
return $output519;
};
$arguments517 = array();
$arguments517['value'] = NULL;
$arguments517['name'] = NULL;
$arguments517['name'] = 'headerClass';
$renderChildrenClosure518 = ($arguments517['value'] !== null) ? function() use ($arguments517) { return $arguments517['value']; } : $renderChildrenClosure518;
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext)]);

$output503 .= '
<header id="page-header" class="';
$array529 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headerClass', $array529)]);

$output503 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output570 = '';

$output570 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['src'] = '';
$arguments571['treatIdAsReference'] = false;
$arguments571['image'] = NULL;
$arguments571['crop'] = NULL;
$arguments571['cropVariant'] = 'default';
$arguments571['fileExtension'] = NULL;
$arguments571['width'] = NULL;
$arguments571['height'] = NULL;
$arguments571['minWidth'] = NULL;
$arguments571['minHeight'] = NULL;
$arguments571['maxWidth'] = NULL;
$arguments571['maxHeight'] = NULL;
$arguments571['absolute'] = false;
$array573 = array (
);$arguments571['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array573);

$output570 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext)]);

$output570 .= '" alt="';
$array574 = array (
);
$output570 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array574)]);

$output570 .= '" height="';
$array575 = array (
);
$output570 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array575)]);

$output570 .= '" width="';
$array576 = array (
);
$output570 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array576)]);

$output570 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments583 = array();
$arguments583['src'] = '';
$arguments583['treatIdAsReference'] = false;
$arguments583['image'] = NULL;
$arguments583['crop'] = NULL;
$arguments583['cropVariant'] = 'default';
$arguments583['fileExtension'] = NULL;
$arguments583['width'] = NULL;
$arguments583['height'] = NULL;
$arguments583['minWidth'] = NULL;
$arguments583['minHeight'] = NULL;
$arguments583['maxWidth'] = NULL;
$arguments583['maxHeight'] = NULL;
$arguments583['absolute'] = false;
$array585 = array (
);$arguments583['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array585);

$output582 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext)]);

$output582 .= '" alt="';
$array586 = array (
);
$output582 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array586)]);

$output582 .= '" height="';
$array587 = array (
);
$output582 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array587)]);

$output582 .= '" width="';
$array588 = array (
);
$output582 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array588)]);

$output582 .= '">
                    ';
return $output582;
};
$arguments577 = array();
$arguments577['then'] = NULL;
$arguments577['else'] = NULL;
$arguments577['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array579 = array();
$array580 = array (
);$array579['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array580);

$expression581 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments577['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression581(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array579)
					),
					$renderingContext
				);
$arguments577['__thenClosure'] = $renderChildrenClosure578;

$output570 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);

$output570 .= '
                ';
return $output570;
};
$arguments568 = array();

$output567 .= '';

$output567 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
                    <span>';
$array592 = array (
);
$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array592)]);

$output591 .= '</span>
                ';
return $output591;
};
$arguments589 = array();
$arguments589['if'] = NULL;

$output567 .= '';

$output567 .= '
            ';
return $output567;
};
$arguments541 = array();
$arguments541['then'] = NULL;
$arguments541['else'] = NULL;
$arguments541['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array564 = array();
$array565 = array (
);$array564['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array565);

$expression566 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments541['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression566(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array564)
					),
					$renderingContext
				);
$arguments541['__thenClosure'] = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['src'] = '';
$arguments544['treatIdAsReference'] = false;
$arguments544['image'] = NULL;
$arguments544['crop'] = NULL;
$arguments544['cropVariant'] = 'default';
$arguments544['fileExtension'] = NULL;
$arguments544['width'] = NULL;
$arguments544['height'] = NULL;
$arguments544['minWidth'] = NULL;
$arguments544['minHeight'] = NULL;
$arguments544['maxWidth'] = NULL;
$arguments544['maxHeight'] = NULL;
$arguments544['absolute'] = false;
$array546 = array (
);$arguments544['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array546);

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output543 .= '" alt="';
$array547 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array547)]);

$output543 .= '" height="';
$array548 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array548)]);

$output543 .= '" width="';
$array549 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array549)]);

$output543 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['src'] = '';
$arguments556['treatIdAsReference'] = false;
$arguments556['image'] = NULL;
$arguments556['crop'] = NULL;
$arguments556['cropVariant'] = 'default';
$arguments556['fileExtension'] = NULL;
$arguments556['width'] = NULL;
$arguments556['height'] = NULL;
$arguments556['minWidth'] = NULL;
$arguments556['minHeight'] = NULL;
$arguments556['maxWidth'] = NULL;
$arguments556['maxHeight'] = NULL;
$arguments556['absolute'] = false;
$array558 = array (
);$arguments556['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array558);

$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext)]);

$output555 .= '" alt="';
$array559 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array559)]);

$output555 .= '" height="';
$array560 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array560)]);

$output555 .= '" width="';
$array561 = array (
);
$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array561)]);

$output555 .= '">
                    ';
return $output555;
};
$arguments550 = array();
$arguments550['then'] = NULL;
$arguments550['else'] = NULL;
$arguments550['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array552 = array();
$array553 = array (
);$array552['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array553);

$expression554 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments550['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression554(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array552)
					),
					$renderingContext
				);
$arguments550['__thenClosure'] = $renderChildrenClosure551;

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output543 .= '
                ';
return $output543;
};
$arguments541['__elseClosures'][] = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
                    <span>';
$array563 = array (
);
$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array563)]);

$output562 .= '</span>
                ';
return $output562;
};

$output540 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output540 .= '
        ';
return $output540;
};
$arguments530 = array();
$arguments530['additionalAttributes'] = NULL;
$arguments530['data'] = NULL;
$arguments530['class'] = NULL;
$arguments530['dir'] = NULL;
$arguments530['id'] = NULL;
$arguments530['lang'] = NULL;
$arguments530['style'] = NULL;
$arguments530['title'] = NULL;
$arguments530['accesskey'] = NULL;
$arguments530['tabindex'] = NULL;
$arguments530['onclick'] = NULL;
$arguments530['target'] = NULL;
$arguments530['rel'] = NULL;
$arguments530['pageUid'] = NULL;
$arguments530['pageType'] = NULL;
$arguments530['noCache'] = NULL;
$arguments530['language'] = NULL;
$arguments530['noCacheHash'] = NULL;
$arguments530['section'] = NULL;
$arguments530['linkAccessRestrictedPages'] = NULL;
$arguments530['additionalParams'] = NULL;
$arguments530['absolute'] = NULL;
$arguments530['addQueryString'] = NULL;
$arguments530['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments530['addQueryStringMethod'] = NULL;
$array532 = array (
);$arguments530['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array532);
$output533 = '';

$output533 .= 'navbar-brand navbar-brand-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['then'] = NULL;
$arguments534['else'] = NULL;
$arguments534['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array536 = array();
$array537 = array (
);$array536['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array537);

$expression538 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments534['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression538(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array536)
					),
					$renderingContext
				);
$arguments534['then'] = 'image';
$arguments534['else'] = 'text';

$output533 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);
$arguments530['class'] = $output533;
$array539 = array (
);$arguments530['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array539);

$output503 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output503 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
$output598 = '';

$output598 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments599 = array();
$arguments599['key'] = NULL;
$arguments599['id'] = NULL;
$arguments599['default'] = NULL;
$arguments599['arguments'] = NULL;
$arguments599['extensionName'] = NULL;
$arguments599['languageKey'] = NULL;
$arguments599['alternativeLanguageKeys'] = NULL;
$arguments599['key'] = 'togglenavigation';
$arguments599['extensionName'] = 'bootstrap_package';

$output598 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext)]);

$output598 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments601 = array();
$arguments601['section'] = NULL;
$arguments601['partial'] = NULL;
$arguments601['delegate'] = NULL;
$arguments601['renderable'] = NULL;
$arguments601['arguments'] = array (
);
$arguments601['optional'] = false;
$arguments601['default'] = NULL;
$arguments601['contentAs'] = NULL;
$arguments601['debug'] = true;
$arguments601['partial'] = 'DropIn/Navigation/MainBefore';
$arguments601['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output598 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext);

$output598 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['section'] = NULL;
$arguments604['partial'] = NULL;
$arguments604['delegate'] = NULL;
$arguments604['renderable'] = NULL;
$arguments604['arguments'] = array (
);
$arguments604['optional'] = false;
$arguments604['default'] = NULL;
$arguments604['contentAs'] = NULL;
$arguments604['debug'] = true;
$arguments604['section'] = 'MainNavigation';
// Rendering Array
$array606 = array();
$array607 = array (
);$array606['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array607);
$array608 = array (
);$array606['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array608);
$arguments604['arguments'] = $array606;

$output598 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext);

$output598 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['section'] = NULL;
$arguments609['partial'] = NULL;
$arguments609['delegate'] = NULL;
$arguments609['renderable'] = NULL;
$arguments609['arguments'] = array (
);
$arguments609['optional'] = false;
$arguments609['default'] = NULL;
$arguments609['contentAs'] = NULL;
$arguments609['debug'] = true;
$arguments609['partial'] = 'DropIn/Navigation/MainAfter';
$arguments609['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output598 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output598 .= '
            </nav>
        ';
return $output598;
};
$arguments593 = array();
$arguments593['then'] = NULL;
$arguments593['else'] = NULL;
$arguments593['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array595 = array();
$array596 = array (
);$array595['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array596);

$expression597 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments593['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression597(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array595)
					),
					$renderingContext
				);
$arguments593['__thenClosure'] = $renderChildrenClosure594;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output503 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$output624 = '';

$output624 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$output871 = '';

$output871 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments872 = array();

$output871 .= '';

$output871 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure875 = function() use ($renderingContext, $self) {
$output876 = '';

$output876 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments877 = array();
$arguments877['then'] = NULL;
$arguments877['else'] = NULL;
$arguments877['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array879 = array();
$array880 = array (
);$array879['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array880);

$expression881 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments877['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression881(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array879)
					),
					$renderingContext
				);
$arguments877['then'] = ' active';

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments882 = array();
$arguments882['then'] = NULL;
$arguments882['else'] = NULL;
$arguments882['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array884 = array();
$array885 = array (
);$array884['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array885);

$expression886 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments882['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression886(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array884)
					),
					$renderingContext
				);
$arguments882['then'] = ' dropdown dropdown-hover';

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext);

$output876 .= '">
                            <a href="';
$array887 = array (
);
$output876 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array887)]);

$output876 .= '" id="nav-item-';
$array888 = array (
);
$output876 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array888)]);

$output876 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments889 = array();
$arguments889['then'] = NULL;
$arguments889['else'] = NULL;
$arguments889['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array891 = array();
$array892 = array (
);$array891['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array892);

$expression893 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments889['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression893(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array891)
					),
					$renderingContext
				);
$arguments889['then'] = ' dropdown-toggle';

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments889, $renderChildrenClosure890, $renderingContext);

$output876 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure895 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments894 = array();
$arguments894['then'] = NULL;
$arguments894['else'] = NULL;
$arguments894['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array896 = array();
$array897 = array (
);$array896['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array897);

$expression898 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments894['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression898(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array896)
					),
					$renderingContext
				);
$output899 = '';

$output899 .= ' target="';
$array900 = array (
);
$output899 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array900)]);

$output899 .= '"';
$arguments894['then'] = $output899;

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments894, $renderChildrenClosure895, $renderingContext);

$output876 .= ' title="';
$array901 = array (
);
$output876 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array901)]);

$output876 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments902 = array();
$arguments902['then'] = NULL;
$arguments902['else'] = NULL;
$arguments902['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array904 = array();
$array905 = array (
);$array904['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array905);

$expression906 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments902['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression906(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array904)
					),
					$renderingContext
				);
$arguments902['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext);

$output876 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
$output913 = '';

$output913 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure915 = function() use ($renderingContext, $self) {
$output934 = '';

$output934 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure936 = function() use ($renderingContext, $self) {
$output937 = '';

$output937 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure939 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments938 = array();
$arguments938['image'] = NULL;
$arguments938['src'] = NULL;
$arguments938['class'] = NULL;
$arguments938['width'] = NULL;
$arguments938['height'] = NULL;
$array940 = array (
);$arguments938['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array940);
$array941 = array (
);$arguments938['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array941);
$array942 = array (
);$arguments938['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array942);

$output937 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments938, $renderChildrenClosure939, $renderingContext);

$output937 .= '
                                            ';
return $output937;
};
$arguments935 = array();

$output934 .= '';

$output934 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
$output945 = '';

$output945 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure947 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments946 = array();
$arguments946['additionalAttributes'] = NULL;
$arguments946['data'] = NULL;
$arguments946['class'] = NULL;
$arguments946['dir'] = NULL;
$arguments946['id'] = NULL;
$arguments946['lang'] = NULL;
$arguments946['style'] = NULL;
$arguments946['title'] = NULL;
$arguments946['accesskey'] = NULL;
$arguments946['tabindex'] = NULL;
$arguments946['onclick'] = NULL;
$arguments946['alt'] = NULL;
$arguments946['ismap'] = NULL;
$arguments946['longdesc'] = NULL;
$arguments946['usemap'] = NULL;
$arguments946['loading'] = NULL;
$arguments946['src'] = '';
$arguments946['treatIdAsReference'] = false;
$arguments946['image'] = NULL;
$arguments946['crop'] = NULL;
$arguments946['cropVariant'] = 'default';
$arguments946['fileExtension'] = NULL;
$arguments946['width'] = NULL;
$arguments946['height'] = NULL;
$arguments946['minWidth'] = NULL;
$arguments946['minHeight'] = NULL;
$arguments946['maxWidth'] = NULL;
$arguments946['maxHeight'] = NULL;
$arguments946['absolute'] = false;
// Rendering Array
$array948 = array();
$array948['loading'] = 'lazy';
$arguments946['additionalAttributes'] = $array948;
$array949 = array (
);$arguments946['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array949);
$array950 = array (
);$arguments946['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array950);
$array951 = array (
);$arguments946['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array951);
$array952 = array (
);$arguments946['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array952);
$array953 = array (
);$arguments946['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array953);

$output945 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments946, $renderChildrenClosure947, $renderingContext);

$output945 .= '
                                            ';
return $output945;
};
$arguments943 = array();
$arguments943['if'] = NULL;

$output934 .= '';

$output934 .= '
                                        ';
return $output934;
};
$arguments914 = array();
$arguments914['then'] = NULL;
$arguments914['else'] = NULL;
$arguments914['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array931 = array();
$array932 = array (
);$array931['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array932);
$array931['1'] = ' === svg';

$expression933 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments914['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression933(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array931)
					),
					$renderingContext
				);
$arguments914['__thenClosure'] = function() use ($renderingContext, $self) {
$output916 = '';

$output916 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments917 = array();
$arguments917['image'] = NULL;
$arguments917['src'] = NULL;
$arguments917['class'] = NULL;
$arguments917['width'] = NULL;
$arguments917['height'] = NULL;
$array919 = array (
);$arguments917['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array919);
$array920 = array (
);$arguments917['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array920);
$array921 = array (
);$arguments917['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array921);

$output916 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);

$output916 .= '
                                            ';
return $output916;
};
$arguments914['__elseClosures'][] = function() use ($renderingContext, $self) {
$output922 = '';

$output922 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure924 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments923 = array();
$arguments923['additionalAttributes'] = NULL;
$arguments923['data'] = NULL;
$arguments923['class'] = NULL;
$arguments923['dir'] = NULL;
$arguments923['id'] = NULL;
$arguments923['lang'] = NULL;
$arguments923['style'] = NULL;
$arguments923['title'] = NULL;
$arguments923['accesskey'] = NULL;
$arguments923['tabindex'] = NULL;
$arguments923['onclick'] = NULL;
$arguments923['alt'] = NULL;
$arguments923['ismap'] = NULL;
$arguments923['longdesc'] = NULL;
$arguments923['usemap'] = NULL;
$arguments923['loading'] = NULL;
$arguments923['src'] = '';
$arguments923['treatIdAsReference'] = false;
$arguments923['image'] = NULL;
$arguments923['crop'] = NULL;
$arguments923['cropVariant'] = 'default';
$arguments923['fileExtension'] = NULL;
$arguments923['width'] = NULL;
$arguments923['height'] = NULL;
$arguments923['minWidth'] = NULL;
$arguments923['minHeight'] = NULL;
$arguments923['maxWidth'] = NULL;
$arguments923['maxHeight'] = NULL;
$arguments923['absolute'] = false;
// Rendering Array
$array925 = array();
$array925['loading'] = 'lazy';
$arguments923['additionalAttributes'] = $array925;
$array926 = array (
);$arguments923['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array926);
$array927 = array (
);$arguments923['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array927);
$array928 = array (
);$arguments923['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array928);
$array929 = array (
);$arguments923['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array929);
$array930 = array (
);$arguments923['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array930);

$output922 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments923, $renderChildrenClosure924, $renderingContext);

$output922 .= '
                                            ';
return $output922;
};

$output913 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments914, $renderChildrenClosure915, $renderingContext);

$output913 .= '
                                    </span>
                                ';
return $output913;
};
$arguments907 = array();
$arguments907['then'] = NULL;
$arguments907['else'] = NULL;
$arguments907['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array909 = array();
$array910 = array (
);$array909['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array910);
$array909['1'] = ' && ';
$array911 = array (
);$array909['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array911);

$expression912 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments907['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression912(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array909)
					),
					$renderingContext
				);
$arguments907['__thenClosure'] = $renderChildrenClosure908;

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext);

$output876 .= '
                                <span class="nav-link-text">';
$array954 = array (
);
$output876 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array954)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure956 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments955 = array();
$arguments955['then'] = NULL;
$arguments955['else'] = NULL;
$arguments955['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array957 = array();
$array958 = array (
);$array957['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array958);

$expression959 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments955['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression959(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array957)
					),
					$renderingContext
				);
$arguments955['__thenClosure'] = $renderChildrenClosure956;

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments955, $renderChildrenClosure956, $renderingContext);

$output876 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure961 = function() use ($renderingContext, $self) {
$output965 = '';

$output965 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array966 = array (
);
$output965 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array966)]);

$output965 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure968 = function() use ($renderingContext, $self) {
$output970 = '';

$output970 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
$output1044 = '';

$output1044 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1046 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments1045 = array();

$output1044 .= '';

$output1044 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1048 = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '
                                                <li>
                                                    <a href="';
$array1050 = array (
);
$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array1050)]);

$output1049 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1052 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1051 = array();
$arguments1051['then'] = NULL;
$arguments1051['else'] = NULL;
$arguments1051['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1053 = array();
$array1054 = array (
);$array1053['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array1054);

$expression1055 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1051['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1055(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1053)
					),
					$renderingContext
				);
$arguments1051['then'] = ' active';

$output1049 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1051, $renderChildrenClosure1052, $renderingContext);

$output1049 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1057 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1056 = array();
$arguments1056['then'] = NULL;
$arguments1056['else'] = NULL;
$arguments1056['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1058 = array();
$array1059 = array (
);$array1058['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array1059);

$expression1060 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1056['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1060(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1058)
					),
					$renderingContext
				);
$output1061 = '';

$output1061 .= ' target="';
$array1062 = array (
);
$output1061 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array1062)]);

$output1061 .= '"';
$arguments1056['then'] = $output1061;

$output1049 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1056, $renderChildrenClosure1057, $renderingContext);

$output1049 .= ' title="';
$array1063 = array (
);
$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1063)]);

$output1049 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
$output1070 = '';

$output1070 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1072 = function() use ($renderingContext, $self) {
$output1091 = '';

$output1091 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1093 = function() use ($renderingContext, $self) {
$output1094 = '';

$output1094 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1095 = array();
$arguments1095['image'] = NULL;
$arguments1095['src'] = NULL;
$arguments1095['class'] = NULL;
$arguments1095['width'] = NULL;
$arguments1095['height'] = NULL;
$array1097 = array (
);$arguments1095['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1097);
$array1098 = array (
);$arguments1095['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1098);
$array1099 = array (
);$arguments1095['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1099);

$output1094 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1095, $renderChildrenClosure1096, $renderingContext);

$output1094 .= '
                                                                    ';
return $output1094;
};
$arguments1092 = array();

$output1091 .= '';

$output1091 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1101 = function() use ($renderingContext, $self) {
$output1102 = '';

$output1102 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1103 = array();
$arguments1103['additionalAttributes'] = NULL;
$arguments1103['data'] = NULL;
$arguments1103['class'] = NULL;
$arguments1103['dir'] = NULL;
$arguments1103['id'] = NULL;
$arguments1103['lang'] = NULL;
$arguments1103['style'] = NULL;
$arguments1103['title'] = NULL;
$arguments1103['accesskey'] = NULL;
$arguments1103['tabindex'] = NULL;
$arguments1103['onclick'] = NULL;
$arguments1103['alt'] = NULL;
$arguments1103['ismap'] = NULL;
$arguments1103['longdesc'] = NULL;
$arguments1103['usemap'] = NULL;
$arguments1103['loading'] = NULL;
$arguments1103['src'] = '';
$arguments1103['treatIdAsReference'] = false;
$arguments1103['image'] = NULL;
$arguments1103['crop'] = NULL;
$arguments1103['cropVariant'] = 'default';
$arguments1103['fileExtension'] = NULL;
$arguments1103['width'] = NULL;
$arguments1103['height'] = NULL;
$arguments1103['minWidth'] = NULL;
$arguments1103['minHeight'] = NULL;
$arguments1103['maxWidth'] = NULL;
$arguments1103['maxHeight'] = NULL;
$arguments1103['absolute'] = false;
// Rendering Array
$array1105 = array();
$array1105['loading'] = 'lazy';
$arguments1103['additionalAttributes'] = $array1105;
$array1106 = array (
);$arguments1103['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1106);
$array1107 = array (
);$arguments1103['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1107);
$array1108 = array (
);$arguments1103['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1108);
$array1109 = array (
);$arguments1103['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1109);
$array1110 = array (
);$arguments1103['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1110);

$output1102 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1103, $renderChildrenClosure1104, $renderingContext);

$output1102 .= '
                                                                    ';
return $output1102;
};
$arguments1100 = array();
$arguments1100['if'] = NULL;

$output1091 .= '';

$output1091 .= '
                                                                ';
return $output1091;
};
$arguments1071 = array();
$arguments1071['then'] = NULL;
$arguments1071['else'] = NULL;
$arguments1071['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1088 = array();
$array1089 = array (
);$array1088['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array1089);
$array1088['1'] = ' === svg';

$expression1090 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments1071['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1090(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1088)
					),
					$renderingContext
				);
$arguments1071['__thenClosure'] = function() use ($renderingContext, $self) {
$output1073 = '';

$output1073 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1075 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1074 = array();
$arguments1074['image'] = NULL;
$arguments1074['src'] = NULL;
$arguments1074['class'] = NULL;
$arguments1074['width'] = NULL;
$arguments1074['height'] = NULL;
$array1076 = array (
);$arguments1074['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1076);
$array1077 = array (
);$arguments1074['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1077);
$array1078 = array (
);$arguments1074['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1078);

$output1073 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1074, $renderChildrenClosure1075, $renderingContext);

$output1073 .= '
                                                                    ';
return $output1073;
};
$arguments1071['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1079 = '';

$output1079 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1081 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1080 = array();
$arguments1080['additionalAttributes'] = NULL;
$arguments1080['data'] = NULL;
$arguments1080['class'] = NULL;
$arguments1080['dir'] = NULL;
$arguments1080['id'] = NULL;
$arguments1080['lang'] = NULL;
$arguments1080['style'] = NULL;
$arguments1080['title'] = NULL;
$arguments1080['accesskey'] = NULL;
$arguments1080['tabindex'] = NULL;
$arguments1080['onclick'] = NULL;
$arguments1080['alt'] = NULL;
$arguments1080['ismap'] = NULL;
$arguments1080['longdesc'] = NULL;
$arguments1080['usemap'] = NULL;
$arguments1080['loading'] = NULL;
$arguments1080['src'] = '';
$arguments1080['treatIdAsReference'] = false;
$arguments1080['image'] = NULL;
$arguments1080['crop'] = NULL;
$arguments1080['cropVariant'] = 'default';
$arguments1080['fileExtension'] = NULL;
$arguments1080['width'] = NULL;
$arguments1080['height'] = NULL;
$arguments1080['minWidth'] = NULL;
$arguments1080['minHeight'] = NULL;
$arguments1080['maxWidth'] = NULL;
$arguments1080['maxHeight'] = NULL;
$arguments1080['absolute'] = false;
// Rendering Array
$array1082 = array();
$array1082['loading'] = 'lazy';
$arguments1080['additionalAttributes'] = $array1082;
$array1083 = array (
);$arguments1080['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1083);
$array1084 = array (
);$arguments1080['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1084);
$array1085 = array (
);$arguments1080['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1085);
$array1086 = array (
);$arguments1080['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1086);
$array1087 = array (
);$arguments1080['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1087);

$output1079 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1080, $renderChildrenClosure1081, $renderingContext);

$output1079 .= '
                                                                    ';
return $output1079;
};

$output1070 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1071, $renderChildrenClosure1072, $renderingContext);

$output1070 .= '
                                                            </span>
                                                        ';
return $output1070;
};
$arguments1064 = array();
$arguments1064['then'] = NULL;
$arguments1064['else'] = NULL;
$arguments1064['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1066 = array();
$array1067 = array (
);$array1066['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array1067);
$array1066['1'] = ' && ';
$array1068 = array (
);$array1066['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array1068);

$expression1069 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1064['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1069(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1066)
					),
					$renderingContext
				);
$arguments1064['__thenClosure'] = $renderChildrenClosure1065;

$output1049 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext);

$output1049 .= '
                                                        <span class="dropdown-text">';
$array1111 = array (
);
$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1111)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1113 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments1112 = array();
$arguments1112['then'] = NULL;
$arguments1112['else'] = NULL;
$arguments1112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1114 = array();
$array1115 = array (
);$array1114['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1115);

$expression1116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1114)
					),
					$renderingContext
				);
$arguments1112['__thenClosure'] = $renderChildrenClosure1113;

$output1049 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1112, $renderChildrenClosure1113, $renderingContext);

$output1049 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output1049;
};
$arguments1047 = array();
$arguments1047['if'] = NULL;

$output1044 .= '';

$output1044 .= '
                                        ';
return $output1044;
};
$arguments971 = array();
$arguments971['then'] = NULL;
$arguments971['else'] = NULL;
$arguments971['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1041 = array();
$array1042 = array (
);$array1041['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array1042);

$expression1043 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments971['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1043(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1041)
					),
					$renderingContext
				);
$arguments971['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments971['__elseClosures'][] = function() use ($renderingContext, $self) {
$output973 = '';

$output973 .= '
                                                <li>
                                                    <a href="';
$array974 = array (
);
$output973 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array974)]);

$output973 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments975 = array();
$arguments975['then'] = NULL;
$arguments975['else'] = NULL;
$arguments975['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array977 = array();
$array978 = array (
);$array977['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array978);

$expression979 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments975['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression979(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array977)
					),
					$renderingContext
				);
$arguments975['then'] = ' active';

$output973 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments975, $renderChildrenClosure976, $renderingContext);

$output973 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure981 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments980 = array();
$arguments980['then'] = NULL;
$arguments980['else'] = NULL;
$arguments980['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array982 = array();
$array983 = array (
);$array982['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array983);

$expression984 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments980['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression984(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array982)
					),
					$renderingContext
				);
$output985 = '';

$output985 .= ' target="';
$array986 = array (
);
$output985 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array986)]);

$output985 .= '"';
$arguments980['then'] = $output985;

$output973 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments980, $renderChildrenClosure981, $renderingContext);

$output973 .= ' title="';
$array987 = array (
);
$output973 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array987)]);

$output973 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure989 = function() use ($renderingContext, $self) {
$output994 = '';

$output994 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure996 = function() use ($renderingContext, $self) {
$output1015 = '';

$output1015 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
$output1018 = '';

$output1018 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure1020 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1019 = array();
$arguments1019['image'] = NULL;
$arguments1019['src'] = NULL;
$arguments1019['class'] = NULL;
$arguments1019['width'] = NULL;
$arguments1019['height'] = NULL;
$array1021 = array (
);$arguments1019['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1021);
$array1022 = array (
);$arguments1019['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1022);
$array1023 = array (
);$arguments1019['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1023);

$output1018 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments1019, $renderChildrenClosure1020, $renderingContext);

$output1018 .= '
                                                                    ';
return $output1018;
};
$arguments1016 = array();

$output1015 .= '';

$output1015 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1025 = function() use ($renderingContext, $self) {
$output1026 = '';

$output1026 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1028 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1027 = array();
$arguments1027['additionalAttributes'] = NULL;
$arguments1027['data'] = NULL;
$arguments1027['class'] = NULL;
$arguments1027['dir'] = NULL;
$arguments1027['id'] = NULL;
$arguments1027['lang'] = NULL;
$arguments1027['style'] = NULL;
$arguments1027['title'] = NULL;
$arguments1027['accesskey'] = NULL;
$arguments1027['tabindex'] = NULL;
$arguments1027['onclick'] = NULL;
$arguments1027['alt'] = NULL;
$arguments1027['ismap'] = NULL;
$arguments1027['longdesc'] = NULL;
$arguments1027['usemap'] = NULL;
$arguments1027['loading'] = NULL;
$arguments1027['src'] = '';
$arguments1027['treatIdAsReference'] = false;
$arguments1027['image'] = NULL;
$arguments1027['crop'] = NULL;
$arguments1027['cropVariant'] = 'default';
$arguments1027['fileExtension'] = NULL;
$arguments1027['width'] = NULL;
$arguments1027['height'] = NULL;
$arguments1027['minWidth'] = NULL;
$arguments1027['minHeight'] = NULL;
$arguments1027['maxWidth'] = NULL;
$arguments1027['maxHeight'] = NULL;
$arguments1027['absolute'] = false;
// Rendering Array
$array1029 = array();
$array1029['loading'] = 'lazy';
$arguments1027['additionalAttributes'] = $array1029;
$array1030 = array (
);$arguments1027['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1030);
$array1031 = array (
);$arguments1027['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1031);
$array1032 = array (
);$arguments1027['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1032);
$array1033 = array (
);$arguments1027['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1033);
$array1034 = array (
);$arguments1027['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1034);

$output1026 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1027, $renderChildrenClosure1028, $renderingContext);

$output1026 .= '
                                                                    ';
return $output1026;
};
$arguments1024 = array();
$arguments1024['if'] = NULL;

$output1015 .= '';

$output1015 .= '
                                                                ';
return $output1015;
};
$arguments995 = array();
$arguments995['then'] = NULL;
$arguments995['else'] = NULL;
$arguments995['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1012 = array();
$array1013 = array (
);$array1012['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array1013);
$array1012['1'] = ' === svg';

$expression1014 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments995['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1014(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1012)
					),
					$renderingContext
				);
$arguments995['__thenClosure'] = function() use ($renderingContext, $self) {
$output997 = '';

$output997 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure999 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments998 = array();
$arguments998['image'] = NULL;
$arguments998['src'] = NULL;
$arguments998['class'] = NULL;
$arguments998['width'] = NULL;
$arguments998['height'] = NULL;
$array1000 = array (
);$arguments998['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1000);
$array1001 = array (
);$arguments998['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1001);
$array1002 = array (
);$arguments998['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1002);

$output997 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments998, $renderChildrenClosure999, $renderingContext);

$output997 .= '
                                                                    ';
return $output997;
};
$arguments995['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1003 = '';

$output1003 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1005 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1004 = array();
$arguments1004['additionalAttributes'] = NULL;
$arguments1004['data'] = NULL;
$arguments1004['class'] = NULL;
$arguments1004['dir'] = NULL;
$arguments1004['id'] = NULL;
$arguments1004['lang'] = NULL;
$arguments1004['style'] = NULL;
$arguments1004['title'] = NULL;
$arguments1004['accesskey'] = NULL;
$arguments1004['tabindex'] = NULL;
$arguments1004['onclick'] = NULL;
$arguments1004['alt'] = NULL;
$arguments1004['ismap'] = NULL;
$arguments1004['longdesc'] = NULL;
$arguments1004['usemap'] = NULL;
$arguments1004['loading'] = NULL;
$arguments1004['src'] = '';
$arguments1004['treatIdAsReference'] = false;
$arguments1004['image'] = NULL;
$arguments1004['crop'] = NULL;
$arguments1004['cropVariant'] = 'default';
$arguments1004['fileExtension'] = NULL;
$arguments1004['width'] = NULL;
$arguments1004['height'] = NULL;
$arguments1004['minWidth'] = NULL;
$arguments1004['minHeight'] = NULL;
$arguments1004['maxWidth'] = NULL;
$arguments1004['maxHeight'] = NULL;
$arguments1004['absolute'] = false;
// Rendering Array
$array1006 = array();
$array1006['loading'] = 'lazy';
$arguments1004['additionalAttributes'] = $array1006;
$array1007 = array (
);$arguments1004['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array1007);
$array1008 = array (
);$arguments1004['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array1008);
$array1009 = array (
);$arguments1004['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array1009);
$array1010 = array (
);$arguments1004['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array1010);
$array1011 = array (
);$arguments1004['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array1011);

$output1003 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1004, $renderChildrenClosure1005, $renderingContext);

$output1003 .= '
                                                                    ';
return $output1003;
};

$output994 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments995, $renderChildrenClosure996, $renderingContext);

$output994 .= '
                                                            </span>
                                                        ';
return $output994;
};
$arguments988 = array();
$arguments988['then'] = NULL;
$arguments988['else'] = NULL;
$arguments988['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array990 = array();
$array991 = array (
);$array990['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array991);
$array990['1'] = ' && ';
$array992 = array (
);$array990['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array992);

$expression993 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments988['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression993(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array990)
					),
					$renderingContext
				);
$arguments988['__thenClosure'] = $renderChildrenClosure989;

$output973 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments988, $renderChildrenClosure989, $renderingContext);

$output973 .= '
                                                        <span class="dropdown-text">';
$array1035 = array (
);
$output973 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array1035)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments1036 = array();
$arguments1036['then'] = NULL;
$arguments1036['else'] = NULL;
$arguments1036['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1038 = array();
$array1039 = array (
);$array1038['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array1039);

$expression1040 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1036['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1040(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1038)
					),
					$renderingContext
				);
$arguments1036['__thenClosure'] = $renderChildrenClosure1037;

$output973 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output973 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output973;
};

$output970 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments971, $renderChildrenClosure972, $renderingContext);

$output970 .= '
                                    ';
return $output970;
};
$arguments967 = array();
$arguments967['each'] = NULL;
$arguments967['as'] = NULL;
$arguments967['key'] = NULL;
$arguments967['reverse'] = false;
$arguments967['iteration'] = NULL;
$array969 = array (
);$arguments967['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array969);
$arguments967['as'] = 'child';

$output965 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments967, $renderChildrenClosure968, $renderingContext);

$output965 .= '
                                </ul>
                            ';
return $output965;
};
$arguments960 = array();
$arguments960['then'] = NULL;
$arguments960['else'] = NULL;
$arguments960['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array962 = array();
$array963 = array (
);$array962['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array963);

$expression964 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments960['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression964(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array962)
					),
					$renderingContext
				);
$arguments960['__thenClosure'] = $renderChildrenClosure961;

$output876 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments960, $renderChildrenClosure961, $renderingContext);

$output876 .= '
                        </li>
                    ';
return $output876;
};
$arguments874 = array();
$arguments874['if'] = NULL;

$output871 .= '';

$output871 .= '
                ';
return $output871;
};
$arguments625 = array();
$arguments625['then'] = NULL;
$arguments625['else'] = NULL;
$arguments625['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array868 = array();
$array869 = array (
);$array868['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array869);

$expression870 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments625['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression870(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array868)
					),
					$renderingContext
				);
$arguments625['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments625['__elseClosures'][] = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments628 = array();
$arguments628['then'] = NULL;
$arguments628['else'] = NULL;
$arguments628['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array630 = array();
$array631 = array (
);$array630['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array631);

$expression632 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments628['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression632(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array630)
					),
					$renderingContext
				);
$arguments628['then'] = ' active';

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments633 = array();
$arguments633['then'] = NULL;
$arguments633['else'] = NULL;
$arguments633['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array635 = array();
$array636 = array (
);$array635['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array636);

$expression637 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments633['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression637(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array635)
					),
					$renderingContext
				);
$arguments633['then'] = ' dropdown dropdown-hover';

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext);

$output627 .= '">
                            <a href="';
$array638 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array638)]);

$output627 .= '" id="nav-item-';
$array639 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array639)]);

$output627 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['then'] = NULL;
$arguments640['else'] = NULL;
$arguments640['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array642 = array();
$array643 = array (
);$array642['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array643);

$expression644 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments640['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression644(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array642)
					),
					$renderingContext
				);
$arguments640['then'] = ' dropdown-toggle';

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output627 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments645 = array();
$arguments645['then'] = NULL;
$arguments645['else'] = NULL;
$arguments645['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array647 = array();
$array648 = array (
);$array647['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array648);

$expression649 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments645['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression649(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array647)
					),
					$renderingContext
				);
$output650 = '';

$output650 .= ' target="';
$array651 = array (
);
$output650 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array651)]);

$output650 .= '"';
$arguments645['then'] = $output650;

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);

$output627 .= ' title="';
$array652 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array652)]);

$output627 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments653 = array();
$arguments653['then'] = NULL;
$arguments653['else'] = NULL;
$arguments653['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array655 = array();
$array656 = array (
);$array655['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array656);

$expression657 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments653['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression657(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array655)
					),
					$renderingContext
				);
$arguments653['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);

$output627 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
$output664 = '';

$output664 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
$output685 = '';

$output685 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
$output688 = '';

$output688 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['image'] = NULL;
$arguments689['src'] = NULL;
$arguments689['class'] = NULL;
$arguments689['width'] = NULL;
$arguments689['height'] = NULL;
$array691 = array (
);$arguments689['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array691);
$array692 = array (
);$arguments689['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array692);
$array693 = array (
);$arguments689['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array693);

$output688 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output688 .= '
                                            ';
return $output688;
};
$arguments686 = array();

$output685 .= '';

$output685 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
$output696 = '';

$output696 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments697 = array();
$arguments697['additionalAttributes'] = NULL;
$arguments697['data'] = NULL;
$arguments697['class'] = NULL;
$arguments697['dir'] = NULL;
$arguments697['id'] = NULL;
$arguments697['lang'] = NULL;
$arguments697['style'] = NULL;
$arguments697['title'] = NULL;
$arguments697['accesskey'] = NULL;
$arguments697['tabindex'] = NULL;
$arguments697['onclick'] = NULL;
$arguments697['alt'] = NULL;
$arguments697['ismap'] = NULL;
$arguments697['longdesc'] = NULL;
$arguments697['usemap'] = NULL;
$arguments697['loading'] = NULL;
$arguments697['src'] = '';
$arguments697['treatIdAsReference'] = false;
$arguments697['image'] = NULL;
$arguments697['crop'] = NULL;
$arguments697['cropVariant'] = 'default';
$arguments697['fileExtension'] = NULL;
$arguments697['width'] = NULL;
$arguments697['height'] = NULL;
$arguments697['minWidth'] = NULL;
$arguments697['minHeight'] = NULL;
$arguments697['maxWidth'] = NULL;
$arguments697['maxHeight'] = NULL;
$arguments697['absolute'] = false;
// Rendering Array
$array699 = array();
$array699['loading'] = 'lazy';
$arguments697['additionalAttributes'] = $array699;
$array700 = array (
);$arguments697['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array700);
$array701 = array (
);$arguments697['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array701);
$array702 = array (
);$arguments697['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array702);
$array703 = array (
);$arguments697['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array703);
$array704 = array (
);$arguments697['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array704);

$output696 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output696 .= '
                                            ';
return $output696;
};
$arguments694 = array();
$arguments694['if'] = NULL;

$output685 .= '';

$output685 .= '
                                        ';
return $output685;
};
$arguments665 = array();
$arguments665['then'] = NULL;
$arguments665['else'] = NULL;
$arguments665['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array682 = array();
$array683 = array (
);$array682['0'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.extension', $array683);
$array682['1'] = ' === svg';

$expression684 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments665['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression684(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array682)
					),
					$renderingContext
				);
$arguments665['__thenClosure'] = function() use ($renderingContext, $self) {
$output667 = '';

$output667 .= '
                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments668 = array();
$arguments668['image'] = NULL;
$arguments668['src'] = NULL;
$arguments668['class'] = NULL;
$arguments668['width'] = NULL;
$arguments668['height'] = NULL;
$array670 = array (
);$arguments668['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array670);
$array671 = array (
);$arguments668['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array671);
$array672 = array (
);$arguments668['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array672);

$output667 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext);

$output667 .= '
                                            ';
return $output667;
};
$arguments665['__elseClosures'][] = function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['additionalAttributes'] = NULL;
$arguments674['data'] = NULL;
$arguments674['class'] = NULL;
$arguments674['dir'] = NULL;
$arguments674['id'] = NULL;
$arguments674['lang'] = NULL;
$arguments674['style'] = NULL;
$arguments674['title'] = NULL;
$arguments674['accesskey'] = NULL;
$arguments674['tabindex'] = NULL;
$arguments674['onclick'] = NULL;
$arguments674['alt'] = NULL;
$arguments674['ismap'] = NULL;
$arguments674['longdesc'] = NULL;
$arguments674['usemap'] = NULL;
$arguments674['loading'] = NULL;
$arguments674['src'] = '';
$arguments674['treatIdAsReference'] = false;
$arguments674['image'] = NULL;
$arguments674['crop'] = NULL;
$arguments674['cropVariant'] = 'default';
$arguments674['fileExtension'] = NULL;
$arguments674['width'] = NULL;
$arguments674['height'] = NULL;
$arguments674['minWidth'] = NULL;
$arguments674['minHeight'] = NULL;
$arguments674['maxWidth'] = NULL;
$arguments674['maxHeight'] = NULL;
$arguments674['absolute'] = false;
// Rendering Array
$array676 = array();
$array676['loading'] = 'lazy';
$arguments674['additionalAttributes'] = $array676;
$array677 = array (
);$arguments674['image'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0', $array677);
$array678 = array (
);$arguments674['alt'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.alternative', $array678);
$array679 = array (
);$arguments674['title'] = $renderingContext->getVariableProvider()->getByPath('item.icon.0.title', $array679);
$array680 = array (
);$arguments674['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array680);
$array681 = array (
);$arguments674['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array681);

$output673 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output673 .= '
                                            ';
return $output673;
};

$output664 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$output664 .= '
                                    </span>
                                ';
return $output664;
};
$arguments658 = array();
$arguments658['then'] = NULL;
$arguments658['else'] = NULL;
$arguments658['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array660 = array();
$array661 = array (
);$array660['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array661);
$array660['1'] = ' && ';
$array662 = array (
);$array660['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array662);

$expression663 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments658['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression663(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array660)
					),
					$renderingContext
				);
$arguments658['__thenClosure'] = $renderChildrenClosure659;

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output627 .= '
                                <span class="nav-link-text">';
$array705 = array (
);
$output627 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array705)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments706 = array();
$arguments706['then'] = NULL;
$arguments706['else'] = NULL;
$arguments706['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array708 = array();
$array709 = array (
);$array708['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array709);

$expression710 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments706['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression710(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array708)
					),
					$renderingContext
				);
$arguments706['__thenClosure'] = $renderChildrenClosure707;

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext);

$output627 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
$output716 = '';

$output716 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array717 = array (
);
$output716 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array717)]);

$output716 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
$output795 = '';

$output795 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure797 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments796 = array();

$output795 .= '';

$output795 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure799 = function() use ($renderingContext, $self) {
$output800 = '';

$output800 .= '
                                                <li>
                                                    <a href="';
$array801 = array (
);
$output800 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array801)]);

$output800 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments802 = array();
$arguments802['then'] = NULL;
$arguments802['else'] = NULL;
$arguments802['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array804 = array();
$array805 = array (
);$array804['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array805);

$expression806 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments802['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression806(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array804)
					),
					$renderingContext
				);
$arguments802['then'] = ' active';

$output800 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext);

$output800 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure808 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments807 = array();
$arguments807['then'] = NULL;
$arguments807['else'] = NULL;
$arguments807['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array809 = array();
$array810 = array (
);$array809['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array810);

$expression811 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments807['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression811(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array809)
					),
					$renderingContext
				);
$output812 = '';

$output812 .= ' target="';
$array813 = array (
);
$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array813)]);

$output812 .= '"';
$arguments807['then'] = $output812;

$output800 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments807, $renderChildrenClosure808, $renderingContext);

$output800 .= ' title="';
$array814 = array (
);
$output800 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array814)]);

$output800 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
$output821 = '';

$output821 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure823 = function() use ($renderingContext, $self) {
$output842 = '';

$output842 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure844 = function() use ($renderingContext, $self) {
$output845 = '';

$output845 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure847 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments846 = array();
$arguments846['image'] = NULL;
$arguments846['src'] = NULL;
$arguments846['class'] = NULL;
$arguments846['width'] = NULL;
$arguments846['height'] = NULL;
$array848 = array (
);$arguments846['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array848);
$array849 = array (
);$arguments846['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array849);
$array850 = array (
);$arguments846['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array850);

$output845 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments846, $renderChildrenClosure847, $renderingContext);

$output845 .= '
                                                                    ';
return $output845;
};
$arguments843 = array();

$output842 .= '';

$output842 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure852 = function() use ($renderingContext, $self) {
$output853 = '';

$output853 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments854 = array();
$arguments854['additionalAttributes'] = NULL;
$arguments854['data'] = NULL;
$arguments854['class'] = NULL;
$arguments854['dir'] = NULL;
$arguments854['id'] = NULL;
$arguments854['lang'] = NULL;
$arguments854['style'] = NULL;
$arguments854['title'] = NULL;
$arguments854['accesskey'] = NULL;
$arguments854['tabindex'] = NULL;
$arguments854['onclick'] = NULL;
$arguments854['alt'] = NULL;
$arguments854['ismap'] = NULL;
$arguments854['longdesc'] = NULL;
$arguments854['usemap'] = NULL;
$arguments854['loading'] = NULL;
$arguments854['src'] = '';
$arguments854['treatIdAsReference'] = false;
$arguments854['image'] = NULL;
$arguments854['crop'] = NULL;
$arguments854['cropVariant'] = 'default';
$arguments854['fileExtension'] = NULL;
$arguments854['width'] = NULL;
$arguments854['height'] = NULL;
$arguments854['minWidth'] = NULL;
$arguments854['minHeight'] = NULL;
$arguments854['maxWidth'] = NULL;
$arguments854['maxHeight'] = NULL;
$arguments854['absolute'] = false;
// Rendering Array
$array856 = array();
$array856['loading'] = 'lazy';
$arguments854['additionalAttributes'] = $array856;
$array857 = array (
);$arguments854['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array857);
$array858 = array (
);$arguments854['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array858);
$array859 = array (
);$arguments854['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array859);
$array860 = array (
);$arguments854['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array860);
$array861 = array (
);$arguments854['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array861);

$output853 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments854, $renderChildrenClosure855, $renderingContext);

$output853 .= '
                                                                    ';
return $output853;
};
$arguments851 = array();
$arguments851['if'] = NULL;

$output842 .= '';

$output842 .= '
                                                                ';
return $output842;
};
$arguments822 = array();
$arguments822['then'] = NULL;
$arguments822['else'] = NULL;
$arguments822['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array839 = array();
$array840 = array (
);$array839['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array840);
$array839['1'] = ' === svg';

$expression841 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments822['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression841(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array839)
					),
					$renderingContext
				);
$arguments822['__thenClosure'] = function() use ($renderingContext, $self) {
$output824 = '';

$output824 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments825 = array();
$arguments825['image'] = NULL;
$arguments825['src'] = NULL;
$arguments825['class'] = NULL;
$arguments825['width'] = NULL;
$arguments825['height'] = NULL;
$array827 = array (
);$arguments825['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array827);
$array828 = array (
);$arguments825['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array828);
$array829 = array (
);$arguments825['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array829);

$output824 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext);

$output824 .= '
                                                                    ';
return $output824;
};
$arguments822['__elseClosures'][] = function() use ($renderingContext, $self) {
$output830 = '';

$output830 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure832 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments831 = array();
$arguments831['additionalAttributes'] = NULL;
$arguments831['data'] = NULL;
$arguments831['class'] = NULL;
$arguments831['dir'] = NULL;
$arguments831['id'] = NULL;
$arguments831['lang'] = NULL;
$arguments831['style'] = NULL;
$arguments831['title'] = NULL;
$arguments831['accesskey'] = NULL;
$arguments831['tabindex'] = NULL;
$arguments831['onclick'] = NULL;
$arguments831['alt'] = NULL;
$arguments831['ismap'] = NULL;
$arguments831['longdesc'] = NULL;
$arguments831['usemap'] = NULL;
$arguments831['loading'] = NULL;
$arguments831['src'] = '';
$arguments831['treatIdAsReference'] = false;
$arguments831['image'] = NULL;
$arguments831['crop'] = NULL;
$arguments831['cropVariant'] = 'default';
$arguments831['fileExtension'] = NULL;
$arguments831['width'] = NULL;
$arguments831['height'] = NULL;
$arguments831['minWidth'] = NULL;
$arguments831['minHeight'] = NULL;
$arguments831['maxWidth'] = NULL;
$arguments831['maxHeight'] = NULL;
$arguments831['absolute'] = false;
// Rendering Array
$array833 = array();
$array833['loading'] = 'lazy';
$arguments831['additionalAttributes'] = $array833;
$array834 = array (
);$arguments831['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array834);
$array835 = array (
);$arguments831['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array835);
$array836 = array (
);$arguments831['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array836);
$array837 = array (
);$arguments831['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array837);
$array838 = array (
);$arguments831['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array838);

$output830 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments831, $renderChildrenClosure832, $renderingContext);

$output830 .= '
                                                                    ';
return $output830;
};

$output821 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments822, $renderChildrenClosure823, $renderingContext);

$output821 .= '
                                                            </span>
                                                        ';
return $output821;
};
$arguments815 = array();
$arguments815['then'] = NULL;
$arguments815['else'] = NULL;
$arguments815['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array817 = array();
$array818 = array (
);$array817['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array818);
$array817['1'] = ' && ';
$array819 = array (
);$array817['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array819);

$expression820 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments815['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression820(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array817)
					),
					$renderingContext
				);
$arguments815['__thenClosure'] = $renderChildrenClosure816;

$output800 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments815, $renderChildrenClosure816, $renderingContext);

$output800 .= '
                                                        <span class="dropdown-text">';
$array862 = array (
);
$output800 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array862)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure864 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments863 = array();
$arguments863['then'] = NULL;
$arguments863['else'] = NULL;
$arguments863['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array865 = array();
$array866 = array (
);$array865['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array866);

$expression867 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments863['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression867(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array865)
					),
					$renderingContext
				);
$arguments863['__thenClosure'] = $renderChildrenClosure864;

$output800 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments863, $renderChildrenClosure864, $renderingContext);

$output800 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output800;
};
$arguments798 = array();
$arguments798['if'] = NULL;

$output795 .= '';

$output795 .= '
                                        ';
return $output795;
};
$arguments722 = array();
$arguments722['then'] = NULL;
$arguments722['else'] = NULL;
$arguments722['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array792 = array();
$array793 = array (
);$array792['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array793);

$expression794 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments722['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression794(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array792)
					),
					$renderingContext
				);
$arguments722['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments722['__elseClosures'][] = function() use ($renderingContext, $self) {
$output724 = '';

$output724 .= '
                                                <li>
                                                    <a href="';
$array725 = array (
);
$output724 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array725)]);

$output724 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments726 = array();
$arguments726['then'] = NULL;
$arguments726['else'] = NULL;
$arguments726['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array728 = array();
$array729 = array (
);$array728['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array729);

$expression730 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments726['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression730(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array728)
					),
					$renderingContext
				);
$arguments726['then'] = ' active';

$output724 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);

$output724 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments731 = array();
$arguments731['then'] = NULL;
$arguments731['else'] = NULL;
$arguments731['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array733 = array();
$array734 = array (
);$array733['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array734);

$expression735 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments731['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression735(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array733)
					),
					$renderingContext
				);
$output736 = '';

$output736 .= ' target="';
$array737 = array (
);
$output736 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array737)]);

$output736 .= '"';
$arguments731['then'] = $output736;

$output724 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext);

$output724 .= ' title="';
$array738 = array (
);
$output724 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array738)]);

$output724 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure740 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
$output766 = '';

$output766 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
$output769 = '';

$output769 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure771 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments770 = array();
$arguments770['image'] = NULL;
$arguments770['src'] = NULL;
$arguments770['class'] = NULL;
$arguments770['width'] = NULL;
$arguments770['height'] = NULL;
$array772 = array (
);$arguments770['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array772);
$array773 = array (
);$arguments770['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array773);
$array774 = array (
);$arguments770['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array774);

$output769 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments770, $renderChildrenClosure771, $renderingContext);

$output769 .= '
                                                                    ';
return $output769;
};
$arguments767 = array();

$output766 .= '';

$output766 .= '
                                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure776 = function() use ($renderingContext, $self) {
$output777 = '';

$output777 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure779 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments778 = array();
$arguments778['additionalAttributes'] = NULL;
$arguments778['data'] = NULL;
$arguments778['class'] = NULL;
$arguments778['dir'] = NULL;
$arguments778['id'] = NULL;
$arguments778['lang'] = NULL;
$arguments778['style'] = NULL;
$arguments778['title'] = NULL;
$arguments778['accesskey'] = NULL;
$arguments778['tabindex'] = NULL;
$arguments778['onclick'] = NULL;
$arguments778['alt'] = NULL;
$arguments778['ismap'] = NULL;
$arguments778['longdesc'] = NULL;
$arguments778['usemap'] = NULL;
$arguments778['loading'] = NULL;
$arguments778['src'] = '';
$arguments778['treatIdAsReference'] = false;
$arguments778['image'] = NULL;
$arguments778['crop'] = NULL;
$arguments778['cropVariant'] = 'default';
$arguments778['fileExtension'] = NULL;
$arguments778['width'] = NULL;
$arguments778['height'] = NULL;
$arguments778['minWidth'] = NULL;
$arguments778['minHeight'] = NULL;
$arguments778['maxWidth'] = NULL;
$arguments778['maxHeight'] = NULL;
$arguments778['absolute'] = false;
// Rendering Array
$array780 = array();
$array780['loading'] = 'lazy';
$arguments778['additionalAttributes'] = $array780;
$array781 = array (
);$arguments778['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array781);
$array782 = array (
);$arguments778['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array782);
$array783 = array (
);$arguments778['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array783);
$array784 = array (
);$arguments778['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array784);
$array785 = array (
);$arguments778['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array785);

$output777 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments778, $renderChildrenClosure779, $renderingContext);

$output777 .= '
                                                                    ';
return $output777;
};
$arguments775 = array();
$arguments775['if'] = NULL;

$output766 .= '';

$output766 .= '
                                                                ';
return $output766;
};
$arguments746 = array();
$arguments746['then'] = NULL;
$arguments746['else'] = NULL;
$arguments746['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array763 = array();
$array764 = array (
);$array763['0'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.extension', $array764);
$array763['1'] = ' === svg';

$expression765 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments746['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression765(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array763)
					),
					$renderingContext
				);
$arguments746['__thenClosure'] = function() use ($renderingContext, $self) {
$output748 = '';

$output748 .= '
                                                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments749 = array();
$arguments749['image'] = NULL;
$arguments749['src'] = NULL;
$arguments749['class'] = NULL;
$arguments749['width'] = NULL;
$arguments749['height'] = NULL;
$array751 = array (
);$arguments749['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array751);
$array752 = array (
);$arguments749['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array752);
$array753 = array (
);$arguments749['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array753);

$output748 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments749, $renderChildrenClosure750, $renderingContext);

$output748 .= '
                                                                    ';
return $output748;
};
$arguments746['__elseClosures'][] = function() use ($renderingContext, $self) {
$output754 = '';

$output754 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments755 = array();
$arguments755['additionalAttributes'] = NULL;
$arguments755['data'] = NULL;
$arguments755['class'] = NULL;
$arguments755['dir'] = NULL;
$arguments755['id'] = NULL;
$arguments755['lang'] = NULL;
$arguments755['style'] = NULL;
$arguments755['title'] = NULL;
$arguments755['accesskey'] = NULL;
$arguments755['tabindex'] = NULL;
$arguments755['onclick'] = NULL;
$arguments755['alt'] = NULL;
$arguments755['ismap'] = NULL;
$arguments755['longdesc'] = NULL;
$arguments755['usemap'] = NULL;
$arguments755['loading'] = NULL;
$arguments755['src'] = '';
$arguments755['treatIdAsReference'] = false;
$arguments755['image'] = NULL;
$arguments755['crop'] = NULL;
$arguments755['cropVariant'] = 'default';
$arguments755['fileExtension'] = NULL;
$arguments755['width'] = NULL;
$arguments755['height'] = NULL;
$arguments755['minWidth'] = NULL;
$arguments755['minHeight'] = NULL;
$arguments755['maxWidth'] = NULL;
$arguments755['maxHeight'] = NULL;
$arguments755['absolute'] = false;
// Rendering Array
$array757 = array();
$array757['loading'] = 'lazy';
$arguments755['additionalAttributes'] = $array757;
$array758 = array (
);$arguments755['image'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0', $array758);
$array759 = array (
);$arguments755['alt'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.alternative', $array759);
$array760 = array (
);$arguments755['title'] = $renderingContext->getVariableProvider()->getByPath('child.icon.0.title', $array760);
$array761 = array (
);$arguments755['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array761);
$array762 = array (
);$arguments755['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array762);

$output754 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext);

$output754 .= '
                                                                    ';
return $output754;
};

$output745 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext);

$output745 .= '
                                                            </span>
                                                        ';
return $output745;
};
$arguments739 = array();
$arguments739['then'] = NULL;
$arguments739['else'] = NULL;
$arguments739['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array741 = array();
$array742 = array (
);$array741['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array742);
$array741['1'] = ' && ';
$array743 = array (
);$array741['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array743);

$expression744 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments739['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression744(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array741)
					),
					$renderingContext
				);
$arguments739['__thenClosure'] = $renderChildrenClosure740;

$output724 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments739, $renderChildrenClosure740, $renderingContext);

$output724 .= '
                                                        <span class="dropdown-text">';
$array786 = array (
);
$output724 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array786)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
return ' <span class="sr-only">(current)</span>';
};
$arguments787 = array();
$arguments787['then'] = NULL;
$arguments787['else'] = NULL;
$arguments787['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array789 = array();
$array790 = array (
);$array789['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array790);

$expression791 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments787['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression791(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array789)
					),
					$renderingContext
				);
$arguments787['__thenClosure'] = $renderChildrenClosure788;

$output724 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output724 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output724;
};

$output721 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output721 .= '
                                    ';
return $output721;
};
$arguments718 = array();
$arguments718['each'] = NULL;
$arguments718['as'] = NULL;
$arguments718['key'] = NULL;
$arguments718['reverse'] = false;
$arguments718['iteration'] = NULL;
$array720 = array (
);$arguments718['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array720);
$arguments718['as'] = 'child';

$output716 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output716 .= '
                                </ul>
                            ';
return $output716;
};
$arguments711 = array();
$arguments711['then'] = NULL;
$arguments711['else'] = NULL;
$arguments711['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array713 = array();
$array714 = array (
);$array713['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array714);

$expression715 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments711['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression715(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array713)
					),
					$renderingContext
				);
$arguments711['__thenClosure'] = $renderChildrenClosure712;

$output627 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output627 .= '
                        </li>
                    ';
return $output627;
};

$output624 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output624 .= '
            ';
return $output624;
};
$arguments621 = array();
$arguments621['each'] = NULL;
$arguments621['as'] = NULL;
$arguments621['key'] = NULL;
$arguments621['reverse'] = false;
$arguments621['iteration'] = NULL;
$array623 = array (
);$arguments621['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array623);
$arguments621['as'] = 'item';

$output620 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output620 .= '
        </ul>
    ';
return $output620;
};
$arguments615 = array();
$arguments615['then'] = NULL;
$arguments615['else'] = NULL;
$arguments615['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array617 = array();
$array618 = array (
);$array617['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array618);

$expression619 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments615['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression619(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array617)
					),
					$renderingContext
				);
$arguments615['__thenClosure'] = $renderChildrenClosure616;

$output614 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);

$output614 .= '
';
return $output614;
};
$arguments612 = array();
$arguments612['name'] = NULL;
$arguments612['name'] = 'MainNavigation';

$output503 .= NULL;

$output503 .= '

';

return $output503;
}


}
#