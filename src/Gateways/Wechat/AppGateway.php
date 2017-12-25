<?php

namespace ailiangkuai\payment\Gateways\Wechat;

use ailiangkuai\payment\Exceptions\InvalidArgumentException;

class AppGateway extends Wechat
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
        return 'APP';
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
        if (is_null($this->user_config->get('appid'))) {
            throw new InvalidArgumentException('Missing Config -- [appid]');
        }

        $this->config['appid'] = $this->user_config->get('appid');

        $payRequest = [
            'appid'     => $this->user_config->get('appid'),
            'partnerid' => $this->user_config->get('mch_id'),
            'prepayid'  => $this->preOrder($config_biz)['prepay_id'],
            'timestamp' => strval(time()),
            'noncestr'  => $this->createNonceStr(),
            'package'   => 'Sign=WXPay',
        ];
        $payRequest['sign'] = $this->getSign($payRequest);

        return $payRequest;
    }
}
