<?php

namespace ailiangkuai\payment\Gateways\Wechat;

use ailiangkuai\payment\Exceptions\InvalidArgumentException;

class PosGateway extends Wechat
{
    /**
     * @var string
     */
    protected $gateway_order = 'pay/micropay';

    /**
     * get trade type config.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @return string
     */
    protected function getTradeType()
    {
        return 'MICROPAY';
    }

    /**
     * pay a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array $config_biz
     *
     * @return array
     */
    public function pay(array $config_biz = [])
    {
        if (is_null($this->user_config->get('app_id'))) {
            throw new InvalidArgumentException('Missing Config -- [app_id]');
        }

        unset($this->config['trade_type']);
        unset($this->config['notify_url']);

        return $this->preOrder($config_biz);
    }
}
