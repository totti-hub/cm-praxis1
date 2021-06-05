<?php

class Standard_action_accordion_28290a56ba510a295da49f0519fca0a020fbb1d8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
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
$arguments7['name'] = 'activeElement';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.default_element', $array9);
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
$arguments10['name'] = 'currentVariants';
$array12 = array (
);$arguments10['value'] = $renderingContext->getVariableProvider()->getByPath('variants', $array12);
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output6 .= '
        <div class="accordion" id="accordion-';
$array13 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array13)]);

$output6 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                <div class="accordion-item card">
                    <div class="accordion-header card-header" id="accordion-heading-';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array18)]);

$output17 .= '-';
$array19 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array19)]);

$output17 .= '">
                        <h4 class="accordion-title">
                            <a href="#accordion-';
$array20 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array20)]);

$output17 .= '-';
$array21 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array21)]);

$output17 .= '" class="accordion-title-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array25);
$array24['1'] = ' == ';
$array26 = array (
);$array24['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array26);

$expression27 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['else'] = ' collapsed';
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output17 .= '" data-toggle="collapse" data-parent="#accordion-';
$array28 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array28)]);

$output17 .= '" aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array32);
$array31['1'] = ' == ';
$array33 = array (
);$array31['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array33);

$expression34 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['then'] = 'true';
$arguments29['else'] = 'false';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output17 .= '" aria-controls="accordion-';
$array35 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array35)]);

$output17 .= '-';
$array36 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array36)]);

$output17 .= '">
                                <span class="accordion-title-link-text">';
$array37 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.header', $array37)]);

$output17 .= '</span>
                                <span class="accordion-title-link-state"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="accordion-';
$array38 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array38)]);

$output17 .= '-';
$array39 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array39)]);

$output17 .= '" class="accordion-collapse collapse';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array43);
$array42['1'] = ' == ';
$array44 = array (
);$array42['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array44);

$expression45 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['then'] = ' show';

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output17 .= '" aria-labelledby="accordion-heading-';
$array46 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array46)]);

$output17 .= '-';
$array47 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array47)]);

$output17 .= '" data-parent="#accordion-';
$array48 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array48)]);

$output17 .= '">
                        <div class="accordion-body card-body">
                            <div class="accordion-content accordion-content-';
$array49 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.mediaorient', $array49)]);

$output17 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                    <div class="accordion-content-item accordion-content-media">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.accordion.{record.data.mediaorient}', $array58);
};
$arguments56 = array();
$arguments56['value'] = NULL;
$arguments56['name'] = NULL;
$arguments56['name'] = 'imageConfig';
$renderChildrenClosure57 = ($arguments56['value'] !== null) ? function() use ($arguments56) { return $arguments56['value']; } : $renderChildrenClosure57;
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['as'] = NULL;
$arguments59['variants'] = NULL;
$arguments59['multiplier'] = NULL;
$arguments59['gutters'] = NULL;
$arguments59['corrections'] = NULL;
$arguments59['as'] = 'variants';
$array61 = array (
);$arguments59['variants'] = $renderingContext->getVariableProvider()->getByPath('currentVariants', $array61);
$array62 = array (
);$arguments59['multiplier'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier', $array62);
$array63 = array (
);$arguments59['gutters'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters', $array63);
$array64 = array (
);$arguments59['corrections'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections', $array64);

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output55 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['section'] = NULL;
$arguments65['partial'] = NULL;
$arguments65['delegate'] = NULL;
$arguments65['renderable'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['optional'] = false;
$arguments65['default'] = NULL;
$arguments65['contentAs'] = NULL;
$arguments65['debug'] = true;
$arguments65['partial'] = 'Media/Gallery';
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['files'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array68);
$array69 = array (
);$array67['data'] = $renderingContext->getVariableProvider()->getByPath('record.data', $array69);
$array70 = array (
);$array67['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array70);
$array71 = array (
);$array67['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array71);
$arguments65['arguments'] = $array67;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output55 .= '
                                    </div>
                                ';
return $output55;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output17 .= '
                                <div class="accordion-content-item accordion-content-text">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array74 = array (
);return $renderingContext->getVariableProvider()->getByPath('record.data.bodytext', $array74);
};
$arguments72 = array();
$arguments72['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output17 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
return $output17;
};
$arguments14 = array();
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$array16 = array (
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array16);
$arguments14['as'] = 'record';
$arguments14['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output6 .= '
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array4);

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
$output75 = '';

$output75 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['name'] = NULL;
$arguments76['name'] = 'Default';

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output75 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['value'] = NULL;
$arguments87['name'] = NULL;
$arguments87['name'] = 'activeElement';
$array89 = array (
);$arguments87['value'] = $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.default_element', $array89);
$renderChildrenClosure88 = ($arguments87['value'] !== null) ? function() use ($arguments87) { return $arguments87['value']; } : $renderChildrenClosure88;
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output86 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['value'] = NULL;
$arguments90['name'] = NULL;
$arguments90['name'] = 'currentVariants';
$array92 = array (
);$arguments90['value'] = $renderingContext->getVariableProvider()->getByPath('variants', $array92);
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output86 .= '
        <div class="accordion" id="accordion-';
$array93 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array93)]);

$output86 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                <div class="accordion-item card">
                    <div class="accordion-header card-header" id="accordion-heading-';
$array98 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array98)]);

$output97 .= '-';
$array99 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array99)]);

$output97 .= '">
                        <h4 class="accordion-title">
                            <a href="#accordion-';
$array100 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array100)]);

$output97 .= '-';
$array101 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array101)]);

$output97 .= '" class="accordion-title-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array105);
$array104['1'] = ' == ';
$array106 = array (
);$array104['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array106);

$expression107 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['else'] = ' collapsed';
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output97 .= '" data-toggle="collapse" data-parent="#accordion-';
$array108 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array108)]);

$output97 .= '" aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array112);
$array111['1'] = ' == ';
$array113 = array (
);$array111['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array113);

$expression114 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['then'] = 'true';
$arguments109['else'] = 'false';

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output97 .= '" aria-controls="accordion-';
$array115 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array115)]);

$output97 .= '-';
$array116 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array116)]);

$output97 .= '">
                                <span class="accordion-title-link-text">';
$array117 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.header', $array117)]);

$output97 .= '</span>
                                <span class="accordion-title-link-state"></span>
                            </a>
                        </h4>
                    </div>
                    <div id="accordion-';
$array118 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array118)]);

$output97 .= '-';
$array119 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array119)]);

$output97 .= '" class="accordion-collapse collapse';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('activeElement', $array123);
$array122['1'] = ' == ';
$array124 = array (
);$array122['2'] = $renderingContext->getVariableProvider()->getByPath('record.data.uid', $array124);

$expression125 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['then'] = ' show';

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output97 .= '" aria-labelledby="accordion-heading-';
$array126 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array126)]);

$output97 .= '-';
$array127 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.uid', $array127)]);

$output97 .= '" data-parent="#accordion-';
$array128 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array128)]);

$output97 .= '">
                        <div class="accordion-body card-body">
                            <div class="accordion-content accordion-content-';
$array129 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('record.data.mediaorient', $array129)]);

$output97 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                                    <div class="accordion-content-item accordion-content-media">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$array138 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.accordion.{record.data.mediaorient}', $array138);
};
$arguments136 = array();
$arguments136['value'] = NULL;
$arguments136['name'] = NULL;
$arguments136['name'] = 'imageConfig';
$renderChildrenClosure137 = ($arguments136['value'] !== null) ? function() use ($arguments136) { return $arguments136['value']; } : $renderChildrenClosure137;
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext)]);

$output135 .= '
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['as'] = NULL;
$arguments139['variants'] = NULL;
$arguments139['multiplier'] = NULL;
$arguments139['gutters'] = NULL;
$arguments139['corrections'] = NULL;
$arguments139['as'] = 'variants';
$array141 = array (
);$arguments139['variants'] = $renderingContext->getVariableProvider()->getByPath('currentVariants', $array141);
$array142 = array (
);$arguments139['multiplier'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier', $array142);
$array143 = array (
);$arguments139['gutters'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters', $array143);
$array144 = array (
);$arguments139['corrections'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections', $array144);

$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output135 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['section'] = NULL;
$arguments145['partial'] = NULL;
$arguments145['delegate'] = NULL;
$arguments145['renderable'] = NULL;
$arguments145['arguments'] = array (
);
$arguments145['optional'] = false;
$arguments145['default'] = NULL;
$arguments145['contentAs'] = NULL;
$arguments145['debug'] = true;
$arguments145['partial'] = 'Media/Gallery';
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['files'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array148);
$array149 = array (
);$array147['data'] = $renderingContext->getVariableProvider()->getByPath('record.data', $array149);
$array150 = array (
);$array147['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array150);
$array151 = array (
);$array147['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array151);
$arguments145['arguments'] = $array147;

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output135 .= '
                                    </div>
                                ';
return $output135;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('record.files', $array133);

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output97 .= '
                                <div class="accordion-content-item accordion-content-text">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array154 = array (
);return $renderingContext->getVariableProvider()->getByPath('record.data.bodytext', $array154);
};
$arguments152 = array();
$arguments152['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output97 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
return $output97;
};
$arguments94 = array();
$arguments94['each'] = NULL;
$arguments94['as'] = NULL;
$arguments94['key'] = NULL;
$arguments94['reverse'] = false;
$arguments94['iteration'] = NULL;
$array96 = array (
);$arguments94['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array96);
$arguments94['as'] = 'record';
$arguments94['iteration'] = 'iteration';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output86 .= '
        </div>
    ';
return $output86;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array84);

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = $renderChildrenClosure82;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '

';
return $output80;
};
$arguments78 = array();
$arguments78['name'] = NULL;
$arguments78['name'] = 'Main';

$output75 .= NULL;

$output75 .= '

';

return $output75;
}


}
#