<?php

class partial_Carousel_General_BackgroundImage_ca15a76b28d189547e4e3e007c014e8d1b5eabd8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['name'] = NULL;
$arguments7['name'] = 'backgroundImageObject';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array9);
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['value'] = NULL;
$arguments10['name'] = NULL;
$arguments10['name'] = 'backgroundImageIdentifier';
$output12 = '';

$output12 .= 'carousel-backgroundimage-';
$array13 = array (
);
$output12 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array13);

$output12 .= '-';
$array14 = array (
);
$output12 .= $renderingContext->getVariableProvider()->getByPath('item.data.uid', $array14);
$arguments10['value'] = $output12;
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return 'carousel-backgroundimage';
};
$arguments15 = array();
$arguments15['value'] = NULL;
$arguments15['name'] = NULL;
$arguments15['name'] = 'backgroundImageClasses';
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';
$array25 = array (
);
$output24 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array25);

$output24 .= ' carousel-backgroundimage-parallax';
return $output24;
};
$arguments22 = array();
$arguments22['value'] = NULL;
$arguments22['name'] = NULL;
$arguments22['name'] = 'backgroundImageClasses';
$renderChildrenClosure23 = ($arguments22['value'] !== null) ? function() use ($arguments22) { return $arguments22['value']; } : $renderChildrenClosure23;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.parallax', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';
$array34 = array (
);
$output33 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array34);

$output33 .= ' carousel-backgroundimage-fade';
return $output33;
};
$arguments31 = array();
$arguments31['value'] = NULL;
$arguments31['name'] = NULL;
$arguments31['name'] = 'backgroundImageClasses';
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.fade', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array43);

$output42 .= ' carousel-backgroundimage-';
$array44 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter', $array44);
return $output42;
};
$arguments40 = array();
$arguments40['value'] = NULL;
$arguments40['name'] = NULL;
$arguments40['name'] = 'backgroundImageClasses';
$renderChildrenClosure41 = ($arguments40['value'] !== null) ? function() use ($arguments40) { return $arguments40['value']; } : $renderChildrenClosure41;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output6 .= '
    <div class="carousel-backgroundimage-container">
        <div id="';
$array45 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier', $array45)]);

$output6 .= '" class="';
$array46 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClasses', $array46)]);

$output6 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['value'] = NULL;
$arguments47['name'] = NULL;
$arguments47['name'] = 'styles';
$arguments47['value'] = '';
$renderChildrenClosure48 = ($arguments47['value'] !== null) ? function() use ($arguments47) { return $arguments47['value']; } : $renderChildrenClosure48;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string55 = '{variant.breakpoint as integer}';
$array56 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string55, $array56);
};
$arguments53 = array();
$arguments53['value'] = NULL;
$arguments53['name'] = NULL;
$arguments53['name'] = 'breakpoint';
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output52 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string59 = '{variant.width as integer}';
$array60 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string59, $array60);
};
$arguments57 = array();
$arguments57['value'] = NULL;
$arguments57['name'] = NULL;
$arguments57['name'] = 'width';
$renderChildrenClosure58 = ($arguments57['value'] !== null) ? function() use ($arguments57) { return $arguments57['value']; } : $renderChildrenClosure58;
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output52 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['value'] = NULL;
$arguments68['name'] = NULL;
$arguments68['name'] = 'variantStyle';
$arguments68['value'] = '';
$renderChildrenClosure69 = ($arguments68['value'] !== null) ? function() use ($arguments68) { return $arguments68['value']; } : $renderChildrenClosure69;
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string76 = '{sizeConfig.multiplier as float}';
$array77 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string76, $array77);
};
$arguments74 = array();
$arguments74['value'] = NULL;
$arguments74['name'] = NULL;
$arguments74['name'] = 'sizeWidth';
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string80 = '{sizeWidth * width}';
$array81 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string80, $array81);
};
$arguments78 = array();
$arguments78['value'] = NULL;
$arguments78['name'] = NULL;
$arguments78['name'] = 'sizeWidth';
$renderChildrenClosure79 = ($arguments78['value'] !== null) ? function() use ($arguments78) { return $arguments78['value']; } : $renderChildrenClosure79;
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string84 = '{sizeKey as float}';
$array85 = array (
  0 => '{sizeKey as float}',
  1 => '{sizeKey as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string84, $array85);
};
$arguments82 = array();
$arguments82['value'] = NULL;
$arguments82['name'] = NULL;
$arguments82['name'] = 'sizeDppx';
$renderChildrenClosure83 = ($arguments82['value'] !== null) ? function() use ($arguments82) { return $arguments82['value']; } : $renderChildrenClosure83;
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '(min-width: ';
$array94 = array (
);
$output93 .= $renderingContext->getVariableProvider()->getByPath('breakpoint', $array94);

$output93 .= 'px)';
return $output93;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('breakpoint', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = $renderChildrenClosure89;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);
};
$arguments86 = array();
$arguments86['value'] = NULL;
$arguments86['name'] = NULL;
$arguments86['name'] = 'mediaBreakpoint';
$renderChildrenClosure87 = ($arguments86['value'] !== null) ? function() use ($arguments86) { return $arguments86['value']; } : $renderChildrenClosure87;
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['value'] = NULL;
$arguments95['name'] = NULL;
$arguments95['name'] = 'mediaQuery';
$arguments95['value'] = '';
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint', $array105);
};
$arguments103 = array();
$arguments103['value'] = NULL;
$arguments103['name'] = NULL;
$arguments103['name'] = 'mediaQuery';
$renderChildrenClosure104 = ($arguments103['value'] !== null) ? function() use ($arguments103) { return $arguments103['value']; } : $renderChildrenClosure104;
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output102 .= '
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
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = $renderChildrenClosure98;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '(-webkit-min-device-pixel-ratio: ';
$array115 = array (
);
$output114 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx', $array115);

$output114 .= ')';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= ' and ';
$array122 = array (
);
$output121 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint', $array122);
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
return $output114;
};
$arguments112 = array();
$arguments112['value'] = NULL;
$arguments112['name'] = NULL;
$arguments112['name'] = 'mediaQuery';
$renderChildrenClosure113 = ($arguments112['value'] !== null) ? function() use ($arguments112) { return $arguments112['value']; } : $renderChildrenClosure113;
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output111 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';
$array126 = array (
);
$output125 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery', $array126);

$output125 .= ', (min-resolution: ';
$array127 = array (
);
$output125 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx', $array127);

$output125 .= 'dppx)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= ' and ';
$array134 = array (
);
$output133 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint', $array134);
return $output133;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint', $array131);

$expression132 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['__thenClosure'] = $renderChildrenClosure129;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
return $output125;
};
$arguments123 = array();
$arguments123['value'] = NULL;
$arguments123['name'] = NULL;
$arguments123['name'] = 'mediaQuery';
$renderChildrenClosure124 = ($arguments123['value'] !== null) ? function() use ($arguments123) { return $arguments123['value']; } : $renderChildrenClosure124;
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output111 .= '
                        ';
return $output111;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('sizeDppx', $array109);
$array108['1'] = ' > 1';

$expression110 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments106['__thenClosure'] = $renderChildrenClosure107;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';
$array138 = array (
);
$output137 .= $renderingContext->getVariableProvider()->getByPath('variantStyle', $array138);

$output137 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '@media ';
$array145 = array (
);
$output144 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery', $array145);

$output144 .= ' { ';
return $output144;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('mediaQuery', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output137 .= '#';
$array146 = array (
);
$output137 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier', $array146);

$output137 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['src'] = '';
$arguments147['treatIdAsReference'] = false;
$arguments147['image'] = NULL;
$arguments147['crop'] = NULL;
$arguments147['cropVariant'] = 'default';
$arguments147['fileExtension'] = NULL;
$arguments147['width'] = NULL;
$arguments147['height'] = NULL;
$arguments147['minWidth'] = NULL;
$arguments147['minHeight'] = NULL;
$arguments147['maxWidth'] = NULL;
$arguments147['maxHeight'] = NULL;
$arguments147['absolute'] = false;
$array149 = array (
);$arguments147['image'] = $renderingContext->getVariableProvider()->getByPath('backgroundImageObject', $array149);
$array150 = array (
);$arguments147['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array150);
$array151 = array (
);$arguments147['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('sizeWidth', $array151);

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output137 .= '\'); }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return ' }';
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('mediaQuery', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = $renderChildrenClosure153;

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);
return $output137;
};
$arguments135 = array();
$arguments135['value'] = NULL;
$arguments135['name'] = NULL;
$arguments135['name'] = 'variantStyle';
$renderChildrenClosure136 = ($arguments135['value'] !== null) ? function() use ($arguments135) { return $arguments135['value']; } : $renderChildrenClosure136;
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output73 .= '
                    ';
return $output73;
};
$arguments70 = array();
$arguments70['each'] = NULL;
$arguments70['as'] = NULL;
$arguments70['key'] = NULL;
$arguments70['reverse'] = false;
$arguments70['iteration'] = NULL;
$array72 = array (
);$arguments70['each'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes', $array72);
$arguments70['key'] = 'sizeKey';
$arguments70['as'] = 'sizeConfig';
$arguments70['iteration'] = 'iteration';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['value'] = NULL;
$arguments157['name'] = NULL;
$arguments157['name'] = 'styles';
$output159 = '';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$array162 = array (
);return $renderingContext->getVariableProvider()->getByPath('variantStyle', $array162);
};
$arguments160 = array();

$output159 .= BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= ' ';
$array163 = array (
);
$output159 .= $renderingContext->getVariableProvider()->getByPath('styles', $array163);
$arguments157['value'] = $output159;
$renderChildrenClosure158 = ($arguments157['value'] !== null) ? function() use ($arguments157) { return $arguments157['value']; } : $renderChildrenClosure158;
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output67 .= '
                ';
return $output67;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('width', $array64);
$array63['1'] = ' && ';
$array65 = array (
);$array63['2'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes', $array65);

$expression66 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = $renderChildrenClosure62;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output52 .= '
            ';
return $output52;
};
$arguments49 = array();
$arguments49['each'] = NULL;
$arguments49['as'] = NULL;
$arguments49['key'] = NULL;
$arguments49['reverse'] = false;
$arguments49['iteration'] = NULL;
$array51 = array (
);$arguments49['each'] = $renderingContext->getVariableProvider()->getByPath('variants', $array51);
$arguments49['key'] = 'name';
$arguments49['as'] = 'variant';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output6 .= '
            <style>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$array166 = array (
);return $renderingContext->getVariableProvider()->getByPath('styles', $array166);
};
$arguments164 = array();
$arguments164['value'] = NULL;

$output6 .= isset($arguments164['value']) ? $arguments164['value'] : $renderChildrenClosure165();

$output6 .= '</style>
        </div>
    </div>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0', $array4);

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


}
#