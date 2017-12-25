<?php

namespace ailiangkuai\payment\Gateways\Wechat;

use ailiangkuai\payment\Exceptions\InvalidArgumentException;

class ScanGateway extends Wechat
{
    /**
     * get trade type config.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @return string
     */
    protected function getTradeType()
    {
        return 'NATIVE';
    }

    /**
     * pay a order using modelTWO.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array $config_biz
     *
     * @return string
     */
    public function pay(array $config_biz = [])
    {
        if (is_null($this->user_config->get('app_id'))) {
            throw new InvalidArgumentException('Missing Config -- [app_id]');
        }

        return $this->preOrder($config_biz)['code_url'];
    }
}
