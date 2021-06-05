<?php

class Standard_action_menuCardDir_22dd4e95a4cd5d1490dae2162ffb9c0164c624ef extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.menu_card_dir.{data.pi_flexform.columns}', $array9);
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
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'Menu/SkipNavigation';
$arguments16['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= '
        <div class="card-menu card-menu card-menu-align-';
$array19 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.align', $array19)]);

$output6 .= ' card-menu-columns-';
$array20 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.columns', $array20)]);

$output6 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                <div class="card-menu-item">

                    <div class="card">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                            <div class="card-img-top">
                                <a href="';
$array31 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array31)]);

$output30 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$output37 = '';

$output37 .= ' target="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array38)]);

$output37 .= '"';
$arguments32['then'] = $output37;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output30 .= ' title="';
$array39 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array39)]);

$output30 .= '" data-toggle="tooltip">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['file'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array43);
$array44 = array (
);$array42['data'] = $renderingContext->getVariableProvider()->getByPath('page.data', $array44);
$array45 = array (
);$array42['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array45);
$array46 = array (
);$array42['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array46);
$arguments40['arguments'] = $array42;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output30 .= '
                                </a>
                            </div>
                        ';
return $output30;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = $renderChildrenClosure26;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                        <div class="card-body">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                                <div class="card-icon">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['image'] = NULL;
$arguments77['src'] = NULL;
$arguments77['class'] = NULL;
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$array79 = array (
);$arguments77['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array79);
$array80 = array (
);$arguments77['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array80);
$array81 = array (
);$arguments77['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array81);

$output76 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                                        ';
return $output76;
};
$arguments74 = array();

$output73 .= '';

$output73 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['alt'] = NULL;
$arguments85['ismap'] = NULL;
$arguments85['longdesc'] = NULL;
$arguments85['usemap'] = NULL;
$arguments85['loading'] = NULL;
$arguments85['src'] = '';
$arguments85['treatIdAsReference'] = false;
$arguments85['image'] = NULL;
$arguments85['crop'] = NULL;
$arguments85['cropVariant'] = 'default';
$arguments85['fileExtension'] = NULL;
$arguments85['width'] = NULL;
$arguments85['height'] = NULL;
$arguments85['minWidth'] = NULL;
$arguments85['minHeight'] = NULL;
$arguments85['maxWidth'] = NULL;
$arguments85['maxHeight'] = NULL;
$arguments85['absolute'] = false;
// Rendering Array
$array87 = array();
$array87['loading'] = 'lazy';
$arguments85['additionalAttributes'] = $array87;
$array88 = array (
);$arguments85['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array88);
$array89 = array (
);$arguments85['alt'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.alternative', $array89);
$array90 = array (
);$arguments85['title'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.title', $array90);
$array91 = array (
);$arguments85['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array91);
$array92 = array (
);$arguments85['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array92);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
                                        ';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

$output73 .= '';

$output73 .= '
                                    ';
return $output73;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.extension', $array71);
$array70['1'] = ' === svg';

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['image'] = NULL;
$arguments56['src'] = NULL;
$arguments56['class'] = NULL;
$arguments56['width'] = NULL;
$arguments56['height'] = NULL;
$array58 = array (
);$arguments56['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array58);
$array59 = array (
);$arguments56['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array59);
$array60 = array (
);$arguments56['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array60);

$output55 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                                        ';
return $output55;
};
$arguments53['__elseClosures'][] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['alt'] = NULL;
$arguments62['ismap'] = NULL;
$arguments62['longdesc'] = NULL;
$arguments62['usemap'] = NULL;
$arguments62['loading'] = NULL;
$arguments62['src'] = '';
$arguments62['treatIdAsReference'] = false;
$arguments62['image'] = NULL;
$arguments62['crop'] = NULL;
$arguments62['cropVariant'] = 'default';
$arguments62['fileExtension'] = NULL;
$arguments62['width'] = NULL;
$arguments62['height'] = NULL;
$arguments62['minWidth'] = NULL;
$arguments62['minHeight'] = NULL;
$arguments62['maxWidth'] = NULL;
$arguments62['maxHeight'] = NULL;
$arguments62['absolute'] = false;
// Rendering Array
$array64 = array();
$array64['loading'] = 'lazy';
$arguments62['additionalAttributes'] = $array64;
$array65 = array (
);$arguments62['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array65);
$array66 = array (
);$arguments62['alt'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.alternative', $array66);
$array67 = array (
);$arguments62['title'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.title', $array67);
$array68 = array (
);$arguments62['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array68);
$array69 = array (
);$arguments62['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array69);

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                                        ';
return $output61;
};

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                                </div>
                            ';
return $output52;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('page.icon', $array50);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = $renderChildrenClosure48;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output24 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                                <h3 class="card-title">
                                    <a href="';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array99)]);

$output98 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array103);

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$output105 = '';

$output105 .= ' target="';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array106)]);

$output105 .= '"';
$arguments100['then'] = $output105;

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output98 .= ' title="';
$array107 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array107)]);

$output98 .= '" data-toggle="tooltip">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array111 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array111)]);
};
$arguments108 = array();
$arguments108['maxCharacters'] = NULL;
$arguments108['append'] = '&hellip;';
$arguments108['respectWordBoundaries'] = true;
$arguments108['respectHtml'] = true;
$array110 = array (
);$arguments108['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.title.crop', $array110);

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output98 .= '
                                    </a>
                                </h3>
                            ';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('page.title', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output24 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                                <h4 class="card-subtitle">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array121 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.subtitle', $array121)]);
};
$arguments118 = array();
$arguments118['maxCharacters'] = NULL;
$arguments118['append'] = '&hellip;';
$arguments118['respectWordBoundaries'] = true;
$arguments118['respectHtml'] = true;
$array120 = array (
);$arguments118['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.subtitle.crop', $array120);

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                                </h4>
                            ';
return $output117;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.subtitle', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['__thenClosure'] = $renderChildrenClosure113;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output24 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                                <p class="card-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array131 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array131)]);
};
$arguments128 = array();
$arguments128['maxCharacters'] = NULL;
$arguments128['append'] = '&hellip;';
$arguments128['respectWordBoundaries'] = true;
$arguments128['respectHtml'] = true;
$array130 = array (
);$arguments128['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.abstract.crop', $array130);

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '</p>
                            ';
return $output127;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array125);

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output24 .= '
                        </div>
                        <div class="card-footer">
                            <a href="';
$array132 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array132)]);

$output24 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$output138 = '';

$output138 .= ' target="';
$array139 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array139)]);

$output138 .= '"';
$arguments133['then'] = $output138;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output24 .= ' class="card-link" title="';
$array140 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array140)]);

$output24 .= '" data-toggle="tooltip">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                                        ';
$array155 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.readmore_label', $array155)]);

$output154 .= '
                                    ';
return $output154;
};
$arguments152 = array();

$output151 .= '';

$output151 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['languageKey'] = NULL;
$arguments159['alternativeLanguageKeys'] = NULL;
$arguments159['key'] = 'readmore';
$arguments159['extensionName'] = 'bootstrap_package';

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output158 .= '
                                    ';
return $output158;
};
$arguments156 = array();
$arguments156['if'] = NULL;

$output151 .= '';

$output151 .= '
                                ';
return $output151;
};
$arguments141 = array();
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('data.readmore_label', $array149);

$expression150 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments141['__thenClosure'] = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
                                        ';
$array144 = array (
);
$output143 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.readmore_label', $array144)]);

$output143 .= '
                                    ';
return $output143;
};
$arguments141['__elseClosures'][] = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['languageKey'] = NULL;
$arguments146['alternativeLanguageKeys'] = NULL;
$arguments146['key'] = 'readmore';
$arguments146['extensionName'] = 'bootstrap_package';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output145 .= '
                                    ';
return $output145;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output24 .= '
                            </a>
                        </div>
                    </div>

                </div>
            ';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array23);
$arguments21['as'] = 'page';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

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
$output161 = '';

$output161 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['name'] = NULL;
$arguments162['name'] = 'Default';

$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output161 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$array175 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.menu_card_dir.{data.pi_flexform.columns}', $array175);
};
$arguments173 = array();
$arguments173['value'] = NULL;
$arguments173['name'] = NULL;
$arguments173['name'] = 'imageConfig';
$renderChildrenClosure174 = ($arguments173['value'] !== null) ? function() use ($arguments173) { return $arguments173['value']; } : $renderChildrenClosure174;
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '
        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['as'] = NULL;
$arguments176['variants'] = NULL;
$arguments176['multiplier'] = NULL;
$arguments176['gutters'] = NULL;
$arguments176['corrections'] = NULL;
$arguments176['as'] = 'variants';
$array178 = array (
);$arguments176['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array178);
$array179 = array (
);$arguments176['multiplier'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier', $array179);
$array180 = array (
);$arguments176['gutters'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters', $array180);
$array181 = array (
);$arguments176['corrections'] = $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections', $array181);

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output172 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['section'] = NULL;
$arguments182['partial'] = NULL;
$arguments182['delegate'] = NULL;
$arguments182['renderable'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['optional'] = false;
$arguments182['default'] = NULL;
$arguments182['contentAs'] = NULL;
$arguments182['debug'] = true;
$arguments182['partial'] = 'Menu/SkipNavigation';
$arguments182['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output172 .= '
        <div class="card-menu card-menu card-menu-align-';
$array185 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.align', $array185)]);

$output172 .= ' card-menu-columns-';
$array186 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.columns', $array186)]);

$output172 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
                <div class="card-menu-item">

                    <div class="card">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                            <div class="card-img-top">
                                <a href="';
$array197 = array (
);
$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array197)]);

$output196 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$arguments198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array201);

$expression202 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array200)
					),
					$renderingContext
				);
$output203 = '';

$output203 .= ' target="';
$array204 = array (
);
$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array204)]);

$output203 .= '"';
$arguments198['then'] = $output203;

$output196 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output196 .= ' title="';
$array205 = array (
);
$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array205)]);

$output196 .= '" data-toggle="tooltip">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['section'] = NULL;
$arguments206['partial'] = NULL;
$arguments206['delegate'] = NULL;
$arguments206['renderable'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['optional'] = false;
$arguments206['default'] = NULL;
$arguments206['contentAs'] = NULL;
$arguments206['debug'] = true;
$arguments206['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array208 = array();
$array209 = array (
);$array208['file'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array209);
$array210 = array (
);$array208['data'] = $renderingContext->getVariableProvider()->getByPath('page.data', $array210);
$array211 = array (
);$array208['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array211);
$array212 = array (
);$array208['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array212);
$arguments206['arguments'] = $array208;

$output196 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output196 .= '
                                </a>
                            </div>
                        ';
return $output196;
};
$arguments191 = array();
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$arguments191['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array194 = array (
);$array193['0'] = $renderingContext->getVariableProvider()->getByPath('page.files.0', $array194);

$expression195 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments191['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression195(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);
$arguments191['__thenClosure'] = $renderChildrenClosure192;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
                        <div class="card-body">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                                <div class="card-icon">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['image'] = NULL;
$arguments243['src'] = NULL;
$arguments243['class'] = NULL;
$arguments243['width'] = NULL;
$arguments243['height'] = NULL;
$array245 = array (
);$arguments243['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array245);
$array246 = array (
);$arguments243['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array246);
$array247 = array (
);$arguments243['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array247);

$output242 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output242 .= '
                                        ';
return $output242;
};
$arguments240 = array();

$output239 .= '';

$output239 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['alt'] = NULL;
$arguments251['ismap'] = NULL;
$arguments251['longdesc'] = NULL;
$arguments251['usemap'] = NULL;
$arguments251['loading'] = NULL;
$arguments251['src'] = '';
$arguments251['treatIdAsReference'] = false;
$arguments251['image'] = NULL;
$arguments251['crop'] = NULL;
$arguments251['cropVariant'] = 'default';
$arguments251['fileExtension'] = NULL;
$arguments251['width'] = NULL;
$arguments251['height'] = NULL;
$arguments251['minWidth'] = NULL;
$arguments251['minHeight'] = NULL;
$arguments251['maxWidth'] = NULL;
$arguments251['maxHeight'] = NULL;
$arguments251['absolute'] = false;
// Rendering Array
$array253 = array();
$array253['loading'] = 'lazy';
$arguments251['additionalAttributes'] = $array253;
$array254 = array (
);$arguments251['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array254);
$array255 = array (
);$arguments251['alt'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.alternative', $array255);
$array256 = array (
);$arguments251['title'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.title', $array256);
$array257 = array (
);$arguments251['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array257);
$array258 = array (
);$arguments251['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array258);

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
                                        ';
return $output250;
};
$arguments248 = array();
$arguments248['if'] = NULL;

$output239 .= '';

$output239 .= '
                                    ';
return $output239;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['0'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.extension', $array237);
$array236['1'] = ' === svg';

$expression238 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === "svg");};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
                                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['image'] = NULL;
$arguments222['src'] = NULL;
$arguments222['class'] = NULL;
$arguments222['width'] = NULL;
$arguments222['height'] = NULL;
$array224 = array (
);$arguments222['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array224);
$array225 = array (
);$arguments222['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array225);
$array226 = array (
);$arguments222['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array226);

$output221 .= BK2K\BootstrapPackage\ViewHelpers\InlineSvgViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output221 .= '
                                        ';
return $output221;
};
$arguments219['__elseClosures'][] = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['class'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$arguments228['alt'] = NULL;
$arguments228['ismap'] = NULL;
$arguments228['longdesc'] = NULL;
$arguments228['usemap'] = NULL;
$arguments228['loading'] = NULL;
$arguments228['src'] = '';
$arguments228['treatIdAsReference'] = false;
$arguments228['image'] = NULL;
$arguments228['crop'] = NULL;
$arguments228['cropVariant'] = 'default';
$arguments228['fileExtension'] = NULL;
$arguments228['width'] = NULL;
$arguments228['height'] = NULL;
$arguments228['minWidth'] = NULL;
$arguments228['minHeight'] = NULL;
$arguments228['maxWidth'] = NULL;
$arguments228['maxHeight'] = NULL;
$arguments228['absolute'] = false;
// Rendering Array
$array230 = array();
$array230['loading'] = 'lazy';
$arguments228['additionalAttributes'] = $array230;
$array231 = array (
);$arguments228['image'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0', $array231);
$array232 = array (
);$arguments228['alt'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.alternative', $array232);
$array233 = array (
);$arguments228['title'] = $renderingContext->getVariableProvider()->getByPath('page.icon.0.title', $array233);
$array234 = array (
);$arguments228['width'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.width', $array234);
$array235 = array (
);$arguments228['height'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.icon.height', $array235);

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                                        ';
return $output227;
};

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
                                </div>
                            ';
return $output218;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('page.icon', $array216);

$expression217 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output190 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                                <h3 class="card-title">
                                    <a href="';
$array265 = array (
);
$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array265)]);

$output264 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$arguments266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array269);

$expression270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$output271 = '';

$output271 .= ' target="';
$array272 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array272)]);

$output271 .= '"';
$arguments266['then'] = $output271;

$output264 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output264 .= ' title="';
$array273 = array (
);
$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array273)]);

$output264 .= '" data-toggle="tooltip">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$array277 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array277)]);
};
$arguments274 = array();
$arguments274['maxCharacters'] = NULL;
$arguments274['append'] = '&hellip;';
$arguments274['respectWordBoundaries'] = true;
$arguments274['respectHtml'] = true;
$array276 = array (
);$arguments274['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.title.crop', $array276);

$output264 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output264 .= '
                                    </a>
                                </h3>
                            ';
return $output264;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('page.title', $array262);

$expression263 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output190 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
                                <h4 class="card-subtitle">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$array287 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.subtitle', $array287)]);
};
$arguments284 = array();
$arguments284['maxCharacters'] = NULL;
$arguments284['append'] = '&hellip;';
$arguments284['respectWordBoundaries'] = true;
$arguments284['respectHtml'] = true;
$array286 = array (
);$arguments284['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.subtitle.crop', $array286);

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output283 .= '
                                </h4>
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
);$array280['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.subtitle', $array281);

$expression282 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['__thenClosure'] = $renderChildrenClosure279;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output190 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
                                <p class="card-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$array297 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array297)]);
};
$arguments294 = array();
$arguments294['maxCharacters'] = NULL;
$arguments294['append'] = '&hellip;';
$arguments294['respectWordBoundaries'] = true;
$arguments294['respectHtml'] = true;
$array296 = array (
);$arguments294['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.menucard.abstract.crop', $array296);

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '</p>
                            ';
return $output293;
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['0'] = $renderingContext->getVariableProvider()->getByPath('page.data.abstract', $array291);

$expression292 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array290)
					),
					$renderingContext
				);
$arguments288['__thenClosure'] = $renderChildrenClosure289;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output190 .= '
                        </div>
                        <div class="card-footer">
                            <a href="';
$array298 = array (
);
$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link', $array298)]);

$output190 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('page.target', $array302);

$expression303 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$output304 = '';

$output304 .= ' target="';
$array305 = array (
);
$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.target', $array305)]);

$output304 .= '"';
$arguments299['then'] = $output304;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output190 .= ' class="card-link" title="';
$array306 = array (
);
$output190 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array306)]);

$output190 .= '" data-toggle="tooltip">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
                                        ';
$array321 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.readmore_label', $array321)]);

$output320 .= '
                                    ';
return $output320;
};
$arguments318 = array();

$output317 .= '';

$output317 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['key'] = NULL;
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$arguments325['languageKey'] = NULL;
$arguments325['alternativeLanguageKeys'] = NULL;
$arguments325['key'] = 'readmore';
$arguments325['extensionName'] = 'bootstrap_package';

$output324 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);

$output324 .= '
                                    ';
return $output324;
};
$arguments322 = array();
$arguments322['if'] = NULL;

$output317 .= '';

$output317 .= '
                                ';
return $output317;
};
$arguments307 = array();
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$arguments307['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['0'] = $renderingContext->getVariableProvider()->getByPath('data.readmore_label', $array315);

$expression316 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments307['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression316(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array314)
					),
					$renderingContext
				);
$arguments307['__thenClosure'] = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
                                        ';
$array310 = array (
);
$output309 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.readmore_label', $array310)]);

$output309 .= '
                                    ';
return $output309;
};
$arguments307['__elseClosures'][] = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                                        ';
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
$arguments312['key'] = 'readmore';
$arguments312['extensionName'] = 'bootstrap_package';

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output311 .= '
                                    ';
return $output311;
};

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output190 .= '
                            </a>
                        </div>
                    </div>

                </div>
            ';
return $output190;
};
$arguments187 = array();
$arguments187['each'] = NULL;
$arguments187['as'] = NULL;
$arguments187['key'] = NULL;
$arguments187['reverse'] = false;
$arguments187['iteration'] = NULL;
$array189 = array (
);$arguments187['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array189);
$arguments187['as'] = 'page';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output172 .= '
        </div>
    ';
return $output172;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array170);

$expression171 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = $renderChildrenClosure168;

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '

';
return $output166;
};
$arguments164 = array();
$arguments164['name'] = NULL;
$arguments164['name'] = 'Main';

$output161 .= NULL;

$output161 .= '

';

return $output161;
}


}
#