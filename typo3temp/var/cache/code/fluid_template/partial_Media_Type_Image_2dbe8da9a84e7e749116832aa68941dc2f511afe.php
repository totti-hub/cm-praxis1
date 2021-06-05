<?php

class partial_Media_Type_Image_2dbe8da9a84e7e749116832aa68941dc2f511afe extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['section'] = NULL;
$arguments99['partial'] = NULL;
$arguments99['delegate'] = NULL;
$arguments99['renderable'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['optional'] = false;
$arguments99['default'] = NULL;
$arguments99['contentAs'] = NULL;
$arguments99['debug'] = true;
$arguments99['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array102);
$array103 = array (
);$array101['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array103);
$array104 = array (
);$array101['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array104);
$array105 = array (
);$array101['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array105);
$arguments99['arguments'] = $array101;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
            ';
return $output98;
};
$arguments94 = array();
$arguments94['parameter'] = NULL;
$arguments94['target'] = '';
$arguments94['class'] = '';
$arguments94['title'] = '';
$arguments94['language'] = NULL;
$arguments94['additionalParams'] = '';
$arguments94['additionalAttributes'] = array (
);
$arguments94['useCacheHash'] = NULL;
$arguments94['addQueryString'] = false;
$arguments94['addQueryStringMethod'] = 'GET';
$arguments94['addQueryStringExclude'] = '';
$arguments94['absolute'] = false;
$arguments94['parts-as'] = 'typoLinkParts';
$array96 = array (
);$arguments94['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link', $array96);
$array97 = array (
);$arguments94['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array97);

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
        ';
return $output93;
};
$arguments91 = array();

$output90 .= '';

$output90 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['src'] = '';
$arguments148['treatIdAsReference'] = false;
$arguments148['image'] = NULL;
$arguments148['crop'] = NULL;
$arguments148['cropVariant'] = 'default';
$arguments148['fileExtension'] = NULL;
$arguments148['width'] = NULL;
$arguments148['height'] = NULL;
$arguments148['minWidth'] = NULL;
$arguments148['minHeight'] = NULL;
$arguments148['maxWidth'] = NULL;
$arguments148['maxHeight'] = NULL;
$arguments148['absolute'] = false;
$array150 = array (
);$arguments148['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array150);
$array151 = array (
);$arguments148['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array151);
$array152 = array (
);$arguments148['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array152);

$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output147 .= '" title="';
$array153 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title', $array153)]);

$output147 .= '" data-lightbox-caption="';
$array154 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array154)]);

$output147 .= '" class="';
$array155 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array155)]);

$output147 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['property'] = NULL;
$arguments156['property'] = 'width';

$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output147 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['property'] = NULL;
$arguments158['property'] = 'height';

$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output147 .= '" rel="';
$array160 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array160)]);

$output147 .= '-';
$array161 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array161)]);

$output147 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['section'] = NULL;
$arguments162['partial'] = NULL;
$arguments162['delegate'] = NULL;
$arguments162['renderable'] = NULL;
$arguments162['arguments'] = array (
);
$arguments162['optional'] = false;
$arguments162['default'] = NULL;
$arguments162['contentAs'] = NULL;
$arguments162['debug'] = true;
$arguments162['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array165);
$array166 = array (
);$array164['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array166);
$array167 = array (
);$array164['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array167);
$array168 = array (
);$array164['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array168);
$arguments162['arguments'] = $array164;

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output147 .= '
                    </a>
                ';
return $output147;
};
$arguments145 = array();

$output144 .= '';

$output144 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['section'] = NULL;
$arguments172['partial'] = NULL;
$arguments172['delegate'] = NULL;
$arguments172['renderable'] = NULL;
$arguments172['arguments'] = array (
);
$arguments172['optional'] = false;
$arguments172['default'] = NULL;
$arguments172['contentAs'] = NULL;
$arguments172['debug'] = true;
$arguments172['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array175);
$array176 = array (
);$array174['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array176);
$array177 = array (
);$array174['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array177);
$array178 = array (
);$array174['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array178);
$arguments172['arguments'] = $array174;

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
                ';
return $output171;
};
$arguments169 = array();
$arguments169['if'] = NULL;

$output144 .= '';

$output144 .= '
            ';
return $output144;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['src'] = '';
$arguments112['treatIdAsReference'] = false;
$arguments112['image'] = NULL;
$arguments112['crop'] = NULL;
$arguments112['cropVariant'] = 'default';
$arguments112['fileExtension'] = NULL;
$arguments112['width'] = NULL;
$arguments112['height'] = NULL;
$arguments112['minWidth'] = NULL;
$arguments112['minHeight'] = NULL;
$arguments112['maxWidth'] = NULL;
$arguments112['maxHeight'] = NULL;
$arguments112['absolute'] = false;
$array114 = array (
);$arguments112['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array114);
$array115 = array (
);$arguments112['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array115);
$array116 = array (
);$arguments112['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array116);

$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output111 .= '" title="';
$array117 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title', $array117)]);

$output111 .= '" data-lightbox-caption="';
$array118 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array118)]);

$output111 .= '" class="';
$array119 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array119)]);

$output111 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['property'] = NULL;
$arguments120['property'] = 'width';

$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output111 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['property'] = NULL;
$arguments122['property'] = 'height';

$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output111 .= '" rel="';
$array124 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array124)]);

$output111 .= '-';
$array125 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array125)]);

$output111 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['section'] = NULL;
$arguments126['partial'] = NULL;
$arguments126['delegate'] = NULL;
$arguments126['renderable'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['optional'] = false;
$arguments126['default'] = NULL;
$arguments126['contentAs'] = NULL;
$arguments126['debug'] = true;
$arguments126['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array129);
$array130 = array (
);$array128['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array130);
$array131 = array (
);$array128['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array131);
$array132 = array (
);$array128['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array132);
$arguments126['arguments'] = $array128;

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output111 .= '
                    </a>
                ';
return $output111;
};
$arguments109['__elseClosures'][] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['renderable'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['debug'] = true;
$arguments134['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array137);
$array138 = array (
);$array136['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array138);
$array139 = array (
);$array136['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array139);
$array140 = array (
);$array136['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array140);
$arguments134['arguments'] = $array136;

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
                ';
return $output133;
};

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
        ';
return $output108;
};
$arguments106 = array();
$arguments106['if'] = NULL;

$output90 .= '';

$output90 .= '
    ';
return $output90;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link', $array88);

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['renderable'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['debug'] = true;
$arguments9['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array12);
$array13 = array (
);$array11['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array13);
$array14 = array (
);$array11['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array14);
$array15 = array (
);$array11['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array15);
$arguments9['arguments'] = $array11;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
return $output8;
};
$arguments4 = array();
$arguments4['parameter'] = NULL;
$arguments4['target'] = '';
$arguments4['class'] = '';
$arguments4['title'] = '';
$arguments4['language'] = NULL;
$arguments4['additionalParams'] = '';
$arguments4['additionalAttributes'] = array (
);
$arguments4['useCacheHash'] = NULL;
$arguments4['addQueryString'] = false;
$arguments4['addQueryStringMethod'] = 'GET';
$arguments4['addQueryStringExclude'] = '';
$arguments4['absolute'] = false;
$arguments4['parts-as'] = 'typoLinkParts';
$array6 = array (
);$arguments4['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link', $array6);
$array7 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array7);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['src'] = '';
$arguments56['treatIdAsReference'] = false;
$arguments56['image'] = NULL;
$arguments56['crop'] = NULL;
$arguments56['cropVariant'] = 'default';
$arguments56['fileExtension'] = NULL;
$arguments56['width'] = NULL;
$arguments56['height'] = NULL;
$arguments56['minWidth'] = NULL;
$arguments56['minHeight'] = NULL;
$arguments56['maxWidth'] = NULL;
$arguments56['maxHeight'] = NULL;
$arguments56['absolute'] = false;
$array58 = array (
);$arguments56['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array58);
$array59 = array (
);$arguments56['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array59);
$array60 = array (
);$arguments56['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array60);

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '" title="';
$array61 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title', $array61)]);

$output55 .= '" data-lightbox-caption="';
$array62 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array62)]);

$output55 .= '" class="';
$array63 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array63)]);

$output55 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['property'] = NULL;
$arguments64['property'] = 'width';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output55 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['property'] = NULL;
$arguments66['property'] = 'height';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output55 .= '" rel="';
$array68 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array68)]);

$output55 .= '-';
$array69 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array69)]);

$output55 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['section'] = NULL;
$arguments70['partial'] = NULL;
$arguments70['delegate'] = NULL;
$arguments70['renderable'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['optional'] = false;
$arguments70['default'] = NULL;
$arguments70['contentAs'] = NULL;
$arguments70['debug'] = true;
$arguments70['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array73);
$array74 = array (
);$array72['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array74);
$array75 = array (
);$array72['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array75);
$array76 = array (
);$array72['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array76);
$arguments70['arguments'] = $array72;

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output55 .= '
                    </a>
                ';
return $output55;
};
$arguments53 = array();

$output52 .= '';

$output52 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['section'] = NULL;
$arguments80['partial'] = NULL;
$arguments80['delegate'] = NULL;
$arguments80['renderable'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['optional'] = false;
$arguments80['default'] = NULL;
$arguments80['contentAs'] = NULL;
$arguments80['debug'] = true;
$arguments80['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array83);
$array84 = array (
);$array82['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array84);
$array85 = array (
);$array82['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array85);
$array86 = array (
);$array82['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array86);
$arguments80['arguments'] = $array82;

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                ';
return $output79;
};
$arguments77 = array();
$arguments77['if'] = NULL;

$output52 .= '';

$output52 .= '
            ';
return $output52;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array50);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['src'] = '';
$arguments20['treatIdAsReference'] = false;
$arguments20['image'] = NULL;
$arguments20['crop'] = NULL;
$arguments20['cropVariant'] = 'default';
$arguments20['fileExtension'] = NULL;
$arguments20['width'] = NULL;
$arguments20['height'] = NULL;
$arguments20['minWidth'] = NULL;
$arguments20['minHeight'] = NULL;
$arguments20['maxWidth'] = NULL;
$arguments20['maxHeight'] = NULL;
$arguments20['absolute'] = false;
$array22 = array (
);$arguments20['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array22);
$array23 = array (
);$arguments20['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array23);
$array24 = array (
);$arguments20['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array24);

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '" title="';
$array25 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title', $array25)]);

$output19 .= '" data-lightbox-caption="';
$array26 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array26)]);

$output19 .= '" class="';
$array27 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array27)]);

$output19 .= '" data-lightbox-width="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['property'] = NULL;
$arguments28['property'] = 'width';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output19 .= '" data-lightbox-height="';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['property'] = NULL;
$arguments30['property'] = 'height';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\LastImageInfoViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output19 .= '" rel="';
$array32 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array32)]);

$output19 .= '-';
$array33 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array33)]);

$output19 .= '">
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
);$array36['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array37);
$array38 = array (
);$array36['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array38);
$array39 = array (
);$array36['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array39);
$array40 = array (
);$array36['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array40);
$arguments34['arguments'] = $array36;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output19 .= '
                    </a>
                ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array45);
$array46 = array (
);$array44['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array46);
$array47 = array (
);$array44['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array47);
$array48 = array (
);$array44['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array48);
$arguments42['arguments'] = $array44;

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                ';
return $output41;
};

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
        ';
return $output16;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
        <figcaption class="caption">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$array187 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array187)]);
};
$arguments185 = array();
$arguments185['value'] = NULL;
$renderChildrenClosure186 = ($arguments185['value'] !== null) ? function() use ($arguments185) { return $arguments185['value']; } : $renderChildrenClosure186;
$output184 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '</figcaption>
    ';
return $output184;
};
$arguments179 = array();
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$arguments179['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array182 = array (
);$array181['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array182);

$expression183 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments179['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression183(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);
$arguments179['__thenClosure'] = $renderChildrenClosure180;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output0 .= '
</figure>

';

return $output0;
}


}
#