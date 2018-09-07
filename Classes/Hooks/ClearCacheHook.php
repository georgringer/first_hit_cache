<?php

namespace GeorgRinger\FirstHitCache\Hooks;

use GeorgRinger\FirstHitCache\Service\RequestService;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\DataHandling\DataHandler;

class ClearCacheHook
{

    public function run(array $params, DataHandler $dataHandler)
    {
        if (isset($params['uid_page'])) {
            $url = $this->getUrlOfPage((int)$params['uid_page']);

            try {
                RequestService::createRequest($url);
            } catch (\GuzzleHttp\Exception\GuzzleException $e) {
                // do nothing
            }
        }
    }

    protected function getUrlOfPage(int $pageId, int $language = 0): string
    {
        $additionalGetVars = '';
        if ($language > 0) {
            $additionalGetVars .= '&L=' . $language;
        }
        $url = BackendUtility::getPreviewUrl($pageId, '', null, '', '', $additionalGetVars);
        return $url;
    }
}
