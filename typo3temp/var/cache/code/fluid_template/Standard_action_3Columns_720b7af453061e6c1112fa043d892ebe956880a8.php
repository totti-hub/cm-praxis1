<?php

class Standard_action_3Columns_720b7af453061e6c1112fa043d892ebe956880a8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$array5 = array (
);$array3['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array5);
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['data'] = NULL;
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$arguments7['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array10);
$array9['colPos'] = 8;
$array11 = array (
);$array9['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array11);
$arguments7['data'] = $array9;
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['data'] = NULL;
$arguments12['typoscriptObjectPath'] = NULL;
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$arguments12['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array15);
$array14['colPos'] = 0;
$array16 = array (
);$array14['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array16);
$arguments12['data'] = $array14;
$renderChildrenClosure13 = ($arguments12['data'] !== null) ? function() use ($arguments12) { return $arguments12['data']; } : $renderChildrenClosure13;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
                </main>
                <div class="section-column subcontent-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['data'] = NULL;
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 1;
$array21 = array (
);$array19['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.1.slide', $array21);
$arguments17['data'] = $array19;
$renderChildrenClosure18 = ($arguments17['data'] !== null) ? function() use ($arguments17) { return $arguments17['data']; } : $renderChildrenClosure18;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
                </div>
                <div class="section-column subcontent-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['data'] = NULL;
$arguments22['typoscriptObjectPath'] = NULL;
$arguments22['currentValueKey'] = NULL;
$arguments22['table'] = '';
$arguments22['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array25);
$array24['colPos'] = 2;
$array26 = array (
);$array24['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.2.slide', $array26);
$arguments22['data'] = $array24;
$renderChildrenClosure23 = ($arguments22['data'] !== null) ? function() use ($arguments22) { return $arguments22['data']; } : $renderChildrenClosure23;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output6 .= '
                </div>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['data'] = NULL;
$arguments27['typoscriptObjectPath'] = NULL;
$arguments27['currentValueKey'] = NULL;
$arguments27['table'] = '';
$arguments27['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array30);
$array29['colPos'] = 9;
$array31 = array (
);$array29['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array31);
$arguments27['data'] = $array29;
$renderChildrenClosure28 = ($arguments27['data'] !== null) ? function() use ($arguments27) { return $arguments27['data']; } : $renderChildrenClosure28;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output6 .= '

';

return $output6;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output32 = '';

$output32 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['debug'] = true;
$arguments33['partial'] = 'Structure/FooterContent';
$arguments33['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '

';

return $output32;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output36 = '';

$output36 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['name'] = NULL;
$arguments37['name'] = 'Default';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output36 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['data'] = NULL;
$arguments42['typoscriptObjectPath'] = NULL;
$arguments42['currentValueKey'] = NULL;
$arguments42['table'] = '';
$arguments42['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array45);
$array44['colPos'] = 3;
$array46 = array (
);$array44['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array46);
$arguments42['data'] = $array44;
$renderChildrenClosure43 = ($arguments42['data'] !== null) ? function() use ($arguments42) { return $arguments42['data']; } : $renderChildrenClosure43;
$output41 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '

';
return $output41;
};
$arguments39 = array();
$arguments39['name'] = NULL;
$arguments39['name'] = 'Border';

$output36 .= NULL;

$output36 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['data'] = NULL;
$arguments50['typoscriptObjectPath'] = NULL;
$arguments50['currentValueKey'] = NULL;
$arguments50['table'] = '';
$arguments50['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array53);
$array52['colPos'] = 8;
$array54 = array (
);$array52['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array54);
$arguments50['data'] = $array52;
$renderChildrenClosure51 = ($arguments50['data'] !== null) ? function() use ($arguments50) { return $arguments50['data']; } : $renderChildrenClosure51;
$output49 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['data'] = NULL;
$arguments55['typoscriptObjectPath'] = NULL;
$arguments55['currentValueKey'] = NULL;
$arguments55['table'] = '';
$arguments55['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array58);
$array57['colPos'] = 0;
$array59 = array (
);$array57['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array59);
$arguments55['data'] = $array57;
$renderChildrenClosure56 = ($arguments55['data'] !== null) ? function() use ($arguments55) { return $arguments55['data']; } : $renderChildrenClosure56;
$output49 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output49 .= '
                </main>
                <div class="section-column subcontent-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['data'] = NULL;
$arguments60['typoscriptObjectPath'] = NULL;
$arguments60['currentValueKey'] = NULL;
$arguments60['table'] = '';
$arguments60['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array63);
$array62['colPos'] = 1;
$array64 = array (
);$array62['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.1.slide', $array64);
$arguments60['data'] = $array62;
$renderChildrenClosure61 = ($arguments60['data'] !== null) ? function() use ($arguments60) { return $arguments60['data']; } : $renderChildrenClosure61;
$output49 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output49 .= '
                </div>
                <div class="section-column subcontent-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['data'] = NULL;
$arguments65['typoscriptObjectPath'] = NULL;
$arguments65['currentValueKey'] = NULL;
$arguments65['table'] = '';
$arguments65['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array68);
$array67['colPos'] = 2;
$array69 = array (
);$array67['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.2.slide', $array69);
$arguments65['data'] = $array67;
$renderChildrenClosure66 = ($arguments65['data'] !== null) ? function() use ($arguments65) { return $arguments65['data']; } : $renderChildrenClosure66;
$output49 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output49 .= '
                </div>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['data'] = NULL;
$arguments70['typoscriptObjectPath'] = NULL;
$arguments70['currentValueKey'] = NULL;
$arguments70['table'] = '';
$arguments70['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array73);
$array72['colPos'] = 9;
$array74 = array (
);$array72['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array74);
$arguments70['data'] = $array72;
$renderChildrenClosure71 = ($arguments70['data'] !== null) ? function() use ($arguments70) { return $arguments70['data']; } : $renderChildrenClosure71;
$output49 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output49 .= '

';
return $output49;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'Main';

$output36 .= NULL;

$output36 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['section'] = NULL;
$arguments78['partial'] = NULL;
$arguments78['delegate'] = NULL;
$arguments78['renderable'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['optional'] = false;
$arguments78['default'] = NULL;
$arguments78['contentAs'] = NULL;
$arguments78['debug'] = true;
$arguments78['partial'] = 'Structure/FooterContent';
$arguments78['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '

';
return $output77;
};
$arguments75 = array();
$arguments75['name'] = NULL;
$arguments75['name'] = 'Footer';

$output36 .= NULL;

$output36 .= '

';

return $output36;
}


}
#