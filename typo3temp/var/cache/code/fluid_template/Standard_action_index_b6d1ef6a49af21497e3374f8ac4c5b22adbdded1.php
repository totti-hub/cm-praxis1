<?php

class Standard_action_index_b6d1ef6a49af21497e3374f8ac4c5b22adbdded1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

        <div class="modal-panel-main">
            <div id="t3js-crop-image-container" class="cropper-image-container">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['alt'] = NULL;
$arguments1['ismap'] = NULL;
$arguments1['longdesc'] = NULL;
$arguments1['usemap'] = NULL;
$arguments1['loading'] = NULL;
$arguments1['src'] = '';
$arguments1['treatIdAsReference'] = false;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['fileExtension'] = NULL;
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$array3 = array (
);$arguments1['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array3);
$arguments1['maxWidth'] = 1000;
$arguments1['maxHeight'] = 1000;
$arguments1['id'] = 't3js-crop-image';
$arguments1['class'] = 'cropper-image-container-image';
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['data-original-width'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array5);
$array6 = array (
);$array4['data-original-height'] = $renderingContext->getVariableProvider()->getByPath('image.properties.height', $array6);
$arguments1['additionalAttributes'] = $array4;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            </div>
        </div>
        <div class="modal-panel-sidebar">
            <div class="panel-group" id="accordion-cropper-variants" role="tablist" aria-multiselectable="true">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="cropper-accordion-heading-';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array11)]);

$output10 .= '">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion-cropper-variants"
                                        href="#cropper-collapse-';
$array12 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array12)]);

$output10 .= '"
                                        aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['then'] = 'true';
$arguments13['else'] = 'false';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '"
                                        aria-controls="cropper-collapse-';
$array18 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array18)]);

$output10 .= '"
                                        class="t3js-crop-variant-trigger ';
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
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = 'is-active';
$arguments19['else'] = 'collapsed';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output10 .= '"
                                        data-crop-variant-id="';
$array24 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array24)]);

$output10 .= '"
                                        data-crop-variant>
                                <span><i class="fa fa-chevron-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['then'] = 'up';
$arguments25['else'] = 'down';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output10 .= '"
                                                    aria-hidden="true"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array33 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array33);
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$array32 = array (
);$arguments30['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array32);

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output10 .= '</span>
                                    <div
                                        class="cropper-preview-thumbnail ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array37);
$array36['1'] = '>';
$array38 = array (
);$array36['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.height', $array38);

$expression39 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['then'] = 'wide';
$arguments34['else'] = 'tall';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output10 .= '">
                                        <img class="cropper-preview-thumbnail-image"
                                                    src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['src'] = '';
$arguments40['treatIdAsReference'] = false;
$arguments40['image'] = NULL;
$arguments40['crop'] = NULL;
$arguments40['cropVariant'] = 'default';
$arguments40['fileExtension'] = NULL;
$arguments40['width'] = NULL;
$arguments40['height'] = NULL;
$arguments40['minWidth'] = NULL;
$arguments40['minHeight'] = NULL;
$arguments40['maxWidth'] = NULL;
$arguments40['maxHeight'] = NULL;
$arguments40['absolute'] = false;
$array42 = array (
);$arguments40['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array42);
$arguments40['maxWidth'] = 300;
$arguments40['maxHeight'] = 300;

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output10 .= '">
                                        <div class="cropper-preview-thumbnail-crop-area t3js-cropper-preview-thumbnail-crop-area">
                                            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['src'] = '';
$arguments43['treatIdAsReference'] = false;
$arguments43['image'] = NULL;
$arguments43['crop'] = NULL;
$arguments43['cropVariant'] = 'default';
$arguments43['fileExtension'] = NULL;
$arguments43['width'] = NULL;
$arguments43['height'] = NULL;
$arguments43['minWidth'] = NULL;
$arguments43['minHeight'] = NULL;
$arguments43['maxWidth'] = NULL;
$arguments43['maxHeight'] = NULL;
$arguments43['absolute'] = false;
$array45 = array (
);$arguments43['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array45);
$arguments43['maxWidth'] = 300;
$arguments43['maxHeight'] = 300;

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output10 .= '"
                                                        class="cropper-preview-thumbnail-crop-image t3js-cropper-preview-thumbnail-crop-image">
                                            <div class="cropper-preview-thumbnail-focus-area t3js-cropper-preview-thumbnail-focus-area"></div>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div id="cropper-collapse-';
$array46 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array46)]);

$output10 .= '"
                                    class="panel-collapse collapse ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array50);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['then'] = 'in';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output10 .= '"
                                    role="tabpanel"
                                    aria-labelledby="cropper-accordion-heading-';
$array52 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array52)]);

$output10 .= '">
                            <div class="panel-body">
                                <form class="form">
                                    <div class="form-group">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                                            <label for="ratio-';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array59)]);

$output58 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output58 .= '
                                            </label>
                                            <div id="ratio-';
$array62 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array62)]);

$output58 .= '" class="ratio-buttons t3js-ratio-buttons"
                                                        data-toggle="buttons">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                                                    <label class="btn btn-secondary" data-method="setAspectRatio" data-option="';
$array67 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratio.id', $array67)]);

$output66 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.set-aspect-ratio';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output66 .= '">
                                                        <input
                                                            class="sr-only" id="aspectRatio-';
$array70 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array70)]);

$output66 .= '-';
$array71 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratioIterator.cycle', $array71)]);

$output66 .= '"
                                                            name="aspectRatio-';
$array72 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array72)]);

$output66 .= '-';
$array73 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratioIterator.cycle', $array73)]);

$output66 .= '" value="';
$array74 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array74)]);

$output66 .= '"
                                                            type="radio">
                                                        <span class="t3-js-ratio-title" data-ratio-id="';
$array75 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array75)]);
$array76 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratio.id', $array76)]);

$output66 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array80 = array (
);return $renderingContext->getVariableProvider()->getByPath('ratio.title', $array80);
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$array79 = array (
);$arguments77['id'] = $renderingContext->getVariableProvider()->getByPath('ratio.title', $array79);

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output66 .= '</span> <i class="fa fa-check"></i></label>
                                                ';
return $output66;
};
$arguments63 = array();
$arguments63['each'] = NULL;
$arguments63['as'] = NULL;
$arguments63['key'] = NULL;
$arguments63['reverse'] = false;
$arguments63['iteration'] = NULL;
$array65 = array (
);$arguments63['each'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios', $array65);
$arguments63['as'] = 'ratio';
$arguments63['iteration'] = 'ratioIterator';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output58 .= '
                                            </div>
                                        ';
return $output58;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios', $array56);

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output10 .= '
                                        <label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.selection';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output10 .= '</label>
                                        <div class="table-fit-block">
                                            <table class="table table-no-borders table-transparent">
                                                <tr>
                                                    <td class="t3js-cropper-info-crop"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <button class="btn btn-secondary" data-method="reset" data-crop-variant="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array85 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array85);
};
$arguments83 = array();
$arguments83['value'] = NULL;
$arguments83['forceObject'] = false;
$renderChildrenClosure84 = ($arguments83['value'] !== null) ? function() use ($arguments83) { return $arguments83['value']; } : $renderChildrenClosure84;
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output10 .= '"
                                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.reset';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output10 .= '">
                                            <i class="fa fa-refresh"></i>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['languageKey'] = NULL;
$arguments88['alternativeLanguageKeys'] = NULL;
$arguments88['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.reset';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output10 .= '
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('cropVariants', $array9);
$arguments7['as'] = 'cropVariant';
$arguments7['iteration'] = 'cropVariantIterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
            </div>
        </div>

    ';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output90 = '';

$output90 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '

        <div class="modal-panel-main">
            <div id="t3js-crop-image-container" class="cropper-image-container">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['alt'] = NULL;
$arguments94['ismap'] = NULL;
$arguments94['longdesc'] = NULL;
$arguments94['usemap'] = NULL;
$arguments94['loading'] = NULL;
$arguments94['src'] = '';
$arguments94['treatIdAsReference'] = false;
$arguments94['image'] = NULL;
$arguments94['crop'] = NULL;
$arguments94['cropVariant'] = 'default';
$arguments94['fileExtension'] = NULL;
$arguments94['width'] = NULL;
$arguments94['height'] = NULL;
$arguments94['minWidth'] = NULL;
$arguments94['minHeight'] = NULL;
$arguments94['maxWidth'] = NULL;
$arguments94['maxHeight'] = NULL;
$arguments94['absolute'] = false;
$array96 = array (
);$arguments94['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array96);
$arguments94['maxWidth'] = 1000;
$arguments94['maxHeight'] = 1000;
$arguments94['id'] = 't3js-crop-image';
$arguments94['class'] = 'cropper-image-container-image';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['data-original-width'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array98);
$array99 = array (
);$array97['data-original-height'] = $renderingContext->getVariableProvider()->getByPath('image.properties.height', $array99);
$arguments94['additionalAttributes'] = $array97;

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
            </div>
        </div>
        <div class="modal-panel-sidebar">
            <div class="panel-group" id="accordion-cropper-variants" role="tablist" aria-multiselectable="true">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="cropper-accordion-heading-';
$array104 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array104)]);

$output103 .= '">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion-cropper-variants"
                                        href="#cropper-collapse-';
$array105 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array105)]);

$output103 .= '"
                                        aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments106['then'] = 'true';
$arguments106['else'] = 'false';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output103 .= '"
                                        aria-controls="cropper-collapse-';
$array111 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array111)]);

$output103 .= '"
                                        class="t3js-crop-variant-trigger ';
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
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['then'] = 'is-active';
$arguments112['else'] = 'collapsed';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output103 .= '"
                                        data-crop-variant-id="';
$array117 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array117)]);

$output103 .= '"
                                        data-crop-variant>
                                <span><i class="fa fa-chevron-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['then'] = 'up';
$arguments118['else'] = 'down';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output103 .= '"
                                                    aria-hidden="true"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$array126 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array126);
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$array125 = array (
);$arguments123['id'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.title', $array125);

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output103 .= '</span>
                                    <div
                                        class="cropper-preview-thumbnail ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('image.properties.width', $array130);
$array129['1'] = '>';
$array131 = array (
);$array129['2'] = $renderingContext->getVariableProvider()->getByPath('image.properties.height', $array131);

$expression132 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['then'] = 'wide';
$arguments127['else'] = 'tall';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output103 .= '">
                                        <img class="cropper-preview-thumbnail-image"
                                                    src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['src'] = '';
$arguments133['treatIdAsReference'] = false;
$arguments133['image'] = NULL;
$arguments133['crop'] = NULL;
$arguments133['cropVariant'] = 'default';
$arguments133['fileExtension'] = NULL;
$arguments133['width'] = NULL;
$arguments133['height'] = NULL;
$arguments133['minWidth'] = NULL;
$arguments133['minHeight'] = NULL;
$arguments133['maxWidth'] = NULL;
$arguments133['maxHeight'] = NULL;
$arguments133['absolute'] = false;
$array135 = array (
);$arguments133['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array135);
$arguments133['maxWidth'] = 300;
$arguments133['maxHeight'] = 300;

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output103 .= '">
                                        <div class="cropper-preview-thumbnail-crop-area t3js-cropper-preview-thumbnail-crop-area">
                                            <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['src'] = '';
$arguments136['treatIdAsReference'] = false;
$arguments136['image'] = NULL;
$arguments136['crop'] = NULL;
$arguments136['cropVariant'] = 'default';
$arguments136['fileExtension'] = NULL;
$arguments136['width'] = NULL;
$arguments136['height'] = NULL;
$arguments136['minWidth'] = NULL;
$arguments136['minHeight'] = NULL;
$arguments136['maxWidth'] = NULL;
$arguments136['maxHeight'] = NULL;
$arguments136['absolute'] = false;
$array138 = array (
);$arguments136['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array138);
$arguments136['maxWidth'] = 300;
$arguments136['maxHeight'] = 300;

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext)]);

$output103 .= '"
                                                        class="cropper-preview-thumbnail-crop-image t3js-cropper-preview-thumbnail-crop-image">
                                            <div class="cropper-preview-thumbnail-focus-area t3js-cropper-preview-thumbnail-focus-area"></div>
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div id="cropper-collapse-';
$array139 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array139)]);

$output103 .= '"
                                    class="panel-collapse collapse ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['then'] = 'in';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output103 .= '"
                                    role="tabpanel"
                                    aria-labelledby="cropper-accordion-heading-';
$array145 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array145)]);

$output103 .= '">
                            <div class="panel-body">
                                <form class="form">
                                    <div class="form-group">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                                            <label for="ratio-';
$array152 = array (
);
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array152)]);

$output151 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['key'] = NULL;
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$arguments153['languageKey'] = NULL;
$arguments153['alternativeLanguageKeys'] = NULL;
$arguments153['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output151 .= '
                                            </label>
                                            <div id="ratio-';
$array155 = array (
);
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array155)]);

$output151 .= '" class="ratio-buttons t3js-ratio-buttons"
                                                        data-toggle="buttons">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
                                                    <label class="btn btn-secondary" data-method="setAspectRatio" data-option="';
$array160 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratio.id', $array160)]);

$output159 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['languageKey'] = NULL;
$arguments161['alternativeLanguageKeys'] = NULL;
$arguments161['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.set-aspect-ratio';

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output159 .= '">
                                                        <input
                                                            class="sr-only" id="aspectRatio-';
$array163 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array163)]);

$output159 .= '-';
$array164 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratioIterator.cycle', $array164)]);

$output159 .= '"
                                                            name="aspectRatio-';
$array165 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle', $array165)]);

$output159 .= '-';
$array166 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratioIterator.cycle', $array166)]);

$output159 .= '" value="';
$array167 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array167)]);

$output159 .= '"
                                                            type="radio">
                                                        <span class="t3-js-ratio-title" data-ratio-id="';
$array168 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id', $array168)]);
$array169 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratio.id', $array169)]);

$output159 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array173 = array (
);return $renderingContext->getVariableProvider()->getByPath('ratio.title', $array173);
};
$arguments170 = array();
$arguments170['key'] = NULL;
$arguments170['id'] = NULL;
$arguments170['default'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['extensionName'] = NULL;
$arguments170['languageKey'] = NULL;
$arguments170['alternativeLanguageKeys'] = NULL;
$array172 = array (
);$arguments170['id'] = $renderingContext->getVariableProvider()->getByPath('ratio.title', $array172);

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output159 .= '</span> <i class="fa fa-check"></i></label>
                                                ';
return $output159;
};
$arguments156 = array();
$arguments156['each'] = NULL;
$arguments156['as'] = NULL;
$arguments156['key'] = NULL;
$arguments156['reverse'] = false;
$arguments156['iteration'] = NULL;
$array158 = array (
);$arguments156['each'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios', $array158);
$arguments156['as'] = 'ratio';
$arguments156['iteration'] = 'ratioIterator';

$output151 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output151 .= '
                                            </div>
                                        ';
return $output151;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios', $array149);

$expression150 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = $renderChildrenClosure147;

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output103 .= '
                                        <label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$arguments174['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.selection';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output103 .= '</label>
                                        <div class="table-fit-block">
                                            <table class="table table-no-borders table-transparent">
                                                <tr>
                                                    <td class="t3js-cropper-info-crop"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <button class="btn btn-secondary" data-method="reset" data-crop-variant="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$array178 = array (
);return $renderingContext->getVariableProvider()->getByPath('cropVariant', $array178);
};
$arguments176 = array();
$arguments176['value'] = NULL;
$arguments176['forceObject'] = false;
$renderChildrenClosure177 = ($arguments176['value'] !== null) ? function() use ($arguments176) { return $arguments176['value']; } : $renderChildrenClosure177;
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output103 .= '"
                                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['key'] = NULL;
$arguments179['id'] = NULL;
$arguments179['default'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['languageKey'] = NULL;
$arguments179['alternativeLanguageKeys'] = NULL;
$arguments179['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.reset';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output103 .= '">
                                            <i class="fa fa-refresh"></i>
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['languageKey'] = NULL;
$arguments181['alternativeLanguageKeys'] = NULL;
$arguments181['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.reset';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output103 .= '
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
return $output103;
};
$arguments100 = array();
$arguments100['each'] = NULL;
$arguments100['as'] = NULL;
$arguments100['key'] = NULL;
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$array102 = array (
);$arguments100['each'] = $renderingContext->getVariableProvider()->getByPath('cropVariants', $array102);
$arguments100['as'] = 'cropVariant';
$arguments100['iteration'] = 'cropVariantIterator';

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output93 .= '
            </div>
        </div>

    ';
return $output93;
};
$arguments91 = array();
$arguments91['name'] = NULL;
$arguments91['name'] = 'Main';

$output90 .= NULL;

$output90 .= '
</html>
';

return $output90;
}


}
#