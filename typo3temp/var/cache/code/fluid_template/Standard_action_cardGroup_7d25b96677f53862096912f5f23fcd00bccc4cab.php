<?php

class Standard_action_cardGroup_7d25b96677f53862096912f5f23fcd00bccc4cab extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.card_group.{data.pi_flexform.columns}', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['name'] = NULL;
$arguments7['name'] = 'imageConfig';
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['as'] = NULL;
$arguments10['variants'] = NULL;
$arguments10['multiplier'] = NULL;
$arguments10['gutters'] = NULL;
$arguments10['corrections'] = NULL;
$arguments10['as'] = 'variants';
$array12 = array (
);$arguments10['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array12);
$array13 = array (
);$arguments10['multiplier'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier', $array13);
$array14 = array (
);$arguments10['gutters'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters', $array14);
$array15 = array (
);$arguments10['corrections'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections', $array15);

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output6 .= '
        <div class="card-group-element card-group-element-align-';
$array16 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.align', $array16)]);

$output6 .= ' card-group-element-columns-';
$array17 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.columns', $array17)]);

$output6 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '

                <div class="card-group-element-item">
                    <div class="card">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                            <div class="card-img-top">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['file'] = $renderingContext->getVariableProvider()->getByPath('item.image.0', $array37);
$array38 = array (
);$array36['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array38);
$array39 = array (
);$array36['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array39);
$array40 = array (
);$array36['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array40);
$arguments34['arguments'] = $array36;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                                ';
return $output33;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$arguments28['section'] = 'LinkWrap';
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['link'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array31);
$array32 = array (
);$array30['linkTitle'] = $renderingContext->getVariableProvider()->getByPath('item.data.header', $array32);
$arguments28['arguments'] = $array30;
$arguments28['contentAs'] = 'content';

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
                            </div>
                        ';
return $output27;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('item.image.0', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
                        <div class="card-body">
                            <h3 class="card-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                                    ';
$array47 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header', $array47)]);

$output46 .= '
                                ';
return $output46;
};
$arguments41 = array();
$arguments41['section'] = NULL;
$arguments41['partial'] = NULL;
$arguments41['delegate'] = NULL;
$arguments41['renderable'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['optional'] = false;
$arguments41['default'] = NULL;
$arguments41['contentAs'] = NULL;
$arguments41['debug'] = true;
$arguments41['section'] = 'LinkWrap';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['link'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array44);
$array45 = array (
);$array43['linkTitle'] = $renderingContext->getVariableProvider()->getByPath('item.data.header', $array45);
$arguments41['arguments'] = $array43;
$arguments41['contentAs'] = 'content';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output21 .= '
                            </h3>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                <h4 class="card-subtitle">';
$array54 = array (
);
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array54)]);

$output53 .= '</h4>
                            ';
return $output53;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output21 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array63 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array63);
};
$arguments61 = array();
$arguments61['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                            ';
return $output60;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array58);

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = $renderChildrenClosure56;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output21 .= '
                        </div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.link_title', $array84);
};
$arguments82 = array();

$output81 .= '';

$output81 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'readmore';
$arguments87['extensionName'] = 'bootstrap_package';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
};
$arguments85 = array();
$arguments85['if'] = NULL;

$output81 .= '';

$output81 .= '
                                ';
return $output81;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.link_title', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.link_title', $array75);
};
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$arguments76['key'] = 'readmore';
$arguments76['extensionName'] = 'bootstrap_package';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);
};

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
                            ';
return $output72;
};
$arguments70 = array();
$arguments70['value'] = NULL;
$arguments70['name'] = NULL;
$arguments70['name'] = 'linkTitle';
$renderChildrenClosure71 = ($arguments70['value'] !== null) ? function() use ($arguments70) { return $arguments70['value']; } : $renderChildrenClosure71;
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output69 .= '
                            <div class="card-footer">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                        <span class="btn-icon">
                                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['image'] = NULL;
$arguments104['src'] = NULL;
$arguments104['class'] = NULL;
$arguments104['width'] = NULL;
$arguments104['height'] = NULL;
$array106 = array (
);$arguments104['image'] = $renderingContext->getVariableProvider()->getByPath('item.linkIcon.0', $array106);

$output103 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
                                        </span>
                                    ';
return $output103;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('item.linkIcon.0', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = $renderChildrenClosure99;

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
                                    <span class="btn-text">
                                        ';
$array107 = array (
);
$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('linkTitle', $array107)]);

$output97 .= '
                                    </span>
                                ';
return $output97;
};
$arguments89 = array();
$arguments89['parameter'] = NULL;
$arguments89['target'] = '';
$arguments89['class'] = '';
$arguments89['title'] = '';
$arguments89['language'] = NULL;
$arguments89['additionalParams'] = '';
$arguments89['additionalAttributes'] = array (
);
$arguments89['useCacheHash'] = NULL;
$arguments89['addQueryString'] = false;
$arguments89['addQueryStringMethod'] = 'GET';
$arguments89['addQueryStringExclude'] = '';
$arguments89['absolute'] = false;
$arguments89['parts-as'] = 'typoLinkParts';
$array91 = array (
);$arguments89['parameter'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array91);
$output92 = '';

$output92 .= 'btn btn-';
$array93 = array (
);
$output92 .= $renderingContext->getVariableProvider()->getByPath('item.data.link_class', $array93);
$arguments89['class'] = $output92;
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array96);
};
$arguments94 = array();
$arguments89['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output69 .= '
                            </div>
                        ';
return $output69;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array67);

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = $renderChildrenClosure65;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output21 .= '
                    </div>
                </div>
            ';
return $output21;
};
$arguments18 = array();
$arguments18['each'] = NULL;
$arguments18['as'] = NULL;
$arguments18['key'] = NULL;
$arguments18['reverse'] = false;
$arguments18['iteration'] = NULL;
$array20 = array (
);$arguments18['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array20);
$arguments18['as'] = 'item';
$arguments18['iteration'] = 'iteration';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

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
 * section LinkWrap
 */
public function section_6329d6a763d60e3b1bacd573ee795674545f7358(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output108 = '';

$output108 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$array140 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array140);
};
$arguments138 = array();
$arguments138['value'] = NULL;
return isset($arguments138['value']) ? $arguments138['value'] : $renderChildrenClosure139();
};
$arguments132 = array();
$arguments132['parameter'] = NULL;
$arguments132['target'] = '';
$arguments132['class'] = '';
$arguments132['title'] = '';
$arguments132['language'] = NULL;
$arguments132['additionalParams'] = '';
$arguments132['additionalAttributes'] = array (
);
$arguments132['useCacheHash'] = NULL;
$arguments132['addQueryString'] = false;
$arguments132['addQueryStringMethod'] = 'GET';
$arguments132['addQueryStringExclude'] = '';
$arguments132['absolute'] = false;
$arguments132['parts-as'] = 'typoLinkParts';
$array134 = array (
);$arguments132['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array134);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$array137 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array137);
};
$arguments135 = array();
$arguments132['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
        ';
return $output131;
};
$arguments129 = array();

$output128 .= '';

$output128 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$array146 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array146);
};
$arguments144 = array();
$arguments144['value'] = NULL;

$output143 .= isset($arguments144['value']) ? $arguments144['value'] : $renderChildrenClosure145();

$output143 .= '
        ';
return $output143;
};
$arguments141 = array();
$arguments141['if'] = NULL;

$output128 .= '';

$output128 .= '
    ';
return $output128;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('link', $array126);

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array120);
};
$arguments118 = array();
$arguments118['value'] = NULL;
return isset($arguments118['value']) ? $arguments118['value'] : $renderChildrenClosure119();
};
$arguments112 = array();
$arguments112['parameter'] = NULL;
$arguments112['target'] = '';
$arguments112['class'] = '';
$arguments112['title'] = '';
$arguments112['language'] = NULL;
$arguments112['additionalParams'] = '';
$arguments112['additionalAttributes'] = array (
);
$arguments112['useCacheHash'] = NULL;
$arguments112['addQueryString'] = false;
$arguments112['addQueryStringMethod'] = 'GET';
$arguments112['addQueryStringExclude'] = '';
$arguments112['absolute'] = false;
$arguments112['parts-as'] = 'typoLinkParts';
$array114 = array (
);$arguments112['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array114);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$array117 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array117);
};
$arguments115 = array();
$arguments112['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
        ';
return $output111;
};
$arguments109['__elseClosures'][] = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output121 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output121 .= '
        ';
return $output121;
};

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '

';

return $output108;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output147 = '';

$output147 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['name'] = NULL;
$arguments148['name'] = 'Default';

$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output147 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.card_group.{data.pi_flexform.columns}', $array161);
};
$arguments159 = array();
$arguments159['value'] = NULL;
$arguments159['name'] = NULL;
$arguments159['name'] = 'imageConfig';
$renderChildrenClosure160 = ($arguments159['value'] !== null) ? function() use ($arguments159) { return $arguments159['value']; } : $renderChildrenClosure160;
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output158 .= '
        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['as'] = NULL;
$arguments162['variants'] = NULL;
$arguments162['multiplier'] = NULL;
$arguments162['gutters'] = NULL;
$arguments162['corrections'] = NULL;
$arguments162['as'] = 'variants';
$array164 = array (
);$arguments162['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array164);
$array165 = array (
);$arguments162['multiplier'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier', $array165);
$array166 = array (
);$arguments162['gutters'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters', $array166);
$array167 = array (
);$arguments162['corrections'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections', $array167);

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output158 .= '
        <div class="card-group-element card-group-element-align-';
$array168 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.align', $array168)]);

$output158 .= ' card-group-element-columns-';
$array169 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.columns', $array169)]);

$output158 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '

                <div class="card-group-element-item">
                    <div class="card">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                            <div class="card-img-top">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['section'] = NULL;
$arguments186['partial'] = NULL;
$arguments186['delegate'] = NULL;
$arguments186['renderable'] = NULL;
$arguments186['arguments'] = array (
);
$arguments186['optional'] = false;
$arguments186['default'] = NULL;
$arguments186['contentAs'] = NULL;
$arguments186['debug'] = true;
$arguments186['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['file'] = $renderingContext->getVariableProvider()->getByPath('item.image.0', $array189);
$array190 = array (
);$array188['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array190);
$array191 = array (
);$array188['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array191);
$array192 = array (
);$array188['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array192);
$arguments186['arguments'] = $array188;

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
                                ';
return $output185;
};
$arguments180 = array();
$arguments180['section'] = NULL;
$arguments180['partial'] = NULL;
$arguments180['delegate'] = NULL;
$arguments180['renderable'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['optional'] = false;
$arguments180['default'] = NULL;
$arguments180['contentAs'] = NULL;
$arguments180['debug'] = true;
$arguments180['section'] = 'LinkWrap';
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['link'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array183);
$array184 = array (
);$array182['linkTitle'] = $renderingContext->getVariableProvider()->getByPath('item.data.header', $array184);
$arguments180['arguments'] = $array182;
$arguments180['contentAs'] = 'content';

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
                            </div>
                        ';
return $output179;
};
$arguments174 = array();
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$arguments174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['0'] = $renderingContext->getVariableProvider()->getByPath('item.image.0', $array177);

$expression178 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);
$arguments174['__thenClosure'] = $renderChildrenClosure175;

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
                        <div class="card-body">
                            <h3 class="card-title">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                                    ';
$array199 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.header', $array199)]);

$output198 .= '
                                ';
return $output198;
};
$arguments193 = array();
$arguments193['section'] = NULL;
$arguments193['partial'] = NULL;
$arguments193['delegate'] = NULL;
$arguments193['renderable'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['optional'] = false;
$arguments193['default'] = NULL;
$arguments193['contentAs'] = NULL;
$arguments193['debug'] = true;
$arguments193['section'] = 'LinkWrap';
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['link'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array196);
$array197 = array (
);$array195['linkTitle'] = $renderingContext->getVariableProvider()->getByPath('item.data.header', $array197);
$arguments193['arguments'] = $array195;
$arguments193['contentAs'] = 'content';

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output173 .= '
                            </h3>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                <h4 class="card-subtitle">';
$array206 = array (
);
$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array206)]);

$output205 .= '</h4>
                            ';
return $output205;
};
$arguments200 = array();
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.subheader', $array203);

$expression204 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments200['__thenClosure'] = $renderChildrenClosure201;

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output173 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$array215 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array215);
};
$arguments213 = array();
$arguments213['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
                            ';
return $output212;
};
$arguments207 = array();
$arguments207['then'] = NULL;
$arguments207['else'] = NULL;
$arguments207['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array209 = array();
$array210 = array (
);$array209['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.bodytext', $array210);

$expression211 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments207['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array209)
					),
					$renderingContext
				);
$arguments207['__thenClosure'] = $renderChildrenClosure208;

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output173 .= '
                        </div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.link_title', $array236);
};
$arguments234 = array();

$output233 .= '';

$output233 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['key'] = NULL;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['languageKey'] = NULL;
$arguments239['alternativeLanguageKeys'] = NULL;
$arguments239['key'] = 'readmore';
$arguments239['extensionName'] = 'bootstrap_package';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);
};
$arguments237 = array();
$arguments237['if'] = NULL;

$output233 .= '';

$output233 .= '
                                ';
return $output233;
};
$arguments225 = array();
$arguments225['then'] = NULL;
$arguments225['else'] = NULL;
$arguments225['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array230 = array();
$array231 = array (
);$array230['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.link_title', $array231);

$expression232 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments225['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array230)
					),
					$renderingContext
				);
$arguments225['__thenClosure'] = function() use ($renderingContext, $self) {
$array227 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.data.link_title', $array227);
};
$arguments225['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['languageKey'] = NULL;
$arguments228['alternativeLanguageKeys'] = NULL;
$arguments228['key'] = 'readmore';
$arguments228['extensionName'] = 'bootstrap_package';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);
};

$output224 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output224 .= '
                            ';
return $output224;
};
$arguments222 = array();
$arguments222['value'] = NULL;
$arguments222['name'] = NULL;
$arguments222['name'] = 'linkTitle';
$renderChildrenClosure223 = ($arguments222['value'] !== null) ? function() use ($arguments222) { return $arguments222['value']; } : $renderChildrenClosure223;
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext)]);

$output221 .= '
                            <div class="card-footer">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                                        <span class="btn-icon">
                                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['image'] = NULL;
$arguments256['src'] = NULL;
$arguments256['class'] = NULL;
$arguments256['width'] = NULL;
$arguments256['height'] = NULL;
$array258 = array (
);$arguments256['image'] = $renderingContext->getVariableProvider()->getByPath('item.linkIcon.0', $array258);

$output255 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
                                        </span>
                                    ';
return $output255;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('item.linkIcon.0', $array253);

$expression254 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = $renderChildrenClosure251;

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '
                                    <span class="btn-text">
                                        ';
$array259 = array (
);
$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('linkTitle', $array259)]);

$output249 .= '
                                    </span>
                                ';
return $output249;
};
$arguments241 = array();
$arguments241['parameter'] = NULL;
$arguments241['target'] = '';
$arguments241['class'] = '';
$arguments241['title'] = '';
$arguments241['language'] = NULL;
$arguments241['additionalParams'] = '';
$arguments241['additionalAttributes'] = array (
);
$arguments241['useCacheHash'] = NULL;
$arguments241['addQueryString'] = false;
$arguments241['addQueryStringMethod'] = 'GET';
$arguments241['addQueryStringExclude'] = '';
$arguments241['absolute'] = false;
$arguments241['parts-as'] = 'typoLinkParts';
$array243 = array (
);$arguments241['parameter'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array243);
$output244 = '';

$output244 .= 'btn btn-';
$array245 = array (
);
$output244 .= $renderingContext->getVariableProvider()->getByPath('item.data.link_class', $array245);
$arguments241['class'] = $output244;
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$array248 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array248);
};
$arguments246 = array();
$arguments241['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output221 .= '
                            </div>
                        ';
return $output221;
};
$arguments216 = array();
$arguments216['then'] = NULL;
$arguments216['else'] = NULL;
$arguments216['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.link', $array219);

$expression220 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments216['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);
$arguments216['__thenClosure'] = $renderChildrenClosure217;

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output173 .= '
                    </div>
                </div>
            ';
return $output173;
};
$arguments170 = array();
$arguments170['each'] = NULL;
$arguments170['as'] = NULL;
$arguments170['key'] = NULL;
$arguments170['reverse'] = false;
$arguments170['iteration'] = NULL;
$array172 = array (
);$arguments170['each'] = $renderingContext->getVariableProvider()->getByPath('records', $array172);
$arguments170['as'] = 'item';
$arguments170['iteration'] = 'iteration';

$output158 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output158 .= '
        </div>
    ';
return $output158;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('records', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = $renderChildrenClosure154;

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '

';
return $output152;
};
$arguments150 = array();
$arguments150['name'] = NULL;
$arguments150['name'] = 'Main';

$output147 .= NULL;

$output147 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$array294 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array294);
};
$arguments292 = array();
$arguments292['value'] = NULL;
return isset($arguments292['value']) ? $arguments292['value'] : $renderChildrenClosure293();
};
$arguments286 = array();
$arguments286['parameter'] = NULL;
$arguments286['target'] = '';
$arguments286['class'] = '';
$arguments286['title'] = '';
$arguments286['language'] = NULL;
$arguments286['additionalParams'] = '';
$arguments286['additionalAttributes'] = array (
);
$arguments286['useCacheHash'] = NULL;
$arguments286['addQueryString'] = false;
$arguments286['addQueryStringMethod'] = 'GET';
$arguments286['addQueryStringExclude'] = '';
$arguments286['absolute'] = false;
$arguments286['parts-as'] = 'typoLinkParts';
$array288 = array (
);$arguments286['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array288);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$array291 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array291);
};
$arguments289 = array();
$arguments286['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
        ';
return $output285;
};
$arguments283 = array();

$output282 .= '';

$output282 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$array300 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array300);
};
$arguments298 = array();
$arguments298['value'] = NULL;

$output297 .= isset($arguments298['value']) ? $arguments298['value'] : $renderChildrenClosure299();

$output297 .= '
        ';
return $output297;
};
$arguments295 = array();
$arguments295['if'] = NULL;

$output282 .= '';

$output282 .= '
    ';
return $output282;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['0'] = $renderingContext->getVariableProvider()->getByPath('link', $array280);

$expression281 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression281(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array279)
					),
					$renderingContext
				);
$arguments263['__thenClosure'] = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$array274 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array274);
};
$arguments272 = array();
$arguments272['value'] = NULL;
return isset($arguments272['value']) ? $arguments272['value'] : $renderChildrenClosure273();
};
$arguments266 = array();
$arguments266['parameter'] = NULL;
$arguments266['target'] = '';
$arguments266['class'] = '';
$arguments266['title'] = '';
$arguments266['language'] = NULL;
$arguments266['additionalParams'] = '';
$arguments266['additionalAttributes'] = array (
);
$arguments266['useCacheHash'] = NULL;
$arguments266['addQueryString'] = false;
$arguments266['addQueryStringMethod'] = 'GET';
$arguments266['addQueryStringExclude'] = '';
$arguments266['absolute'] = false;
$arguments266['parts-as'] = 'typoLinkParts';
$array268 = array (
);$arguments266['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array268);
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$array271 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkTitle', $array271);
};
$arguments269 = array();
$arguments266['title'] = BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '
        ';
return $output265;
};
$arguments263['__elseClosures'][] = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$array278 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array278);
};
$arguments276 = array();
$arguments276['value'] = NULL;

$output275 .= isset($arguments276['value']) ? $arguments276['value'] : $renderChildrenClosure277();

$output275 .= '
        ';
return $output275;
};

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '

';
return $output262;
};
$arguments260 = array();
$arguments260['name'] = NULL;
$arguments260['name'] = 'LinkWrap';

$output147 .= NULL;

$output147 .= '

';

return $output147;
}


}
#