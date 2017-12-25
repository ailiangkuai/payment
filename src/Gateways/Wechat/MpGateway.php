<?php

namespace ailiangkuai\payment\Gateways\Wechat;

use ailiangkuai\payment\Exceptions\InvalidArgumentException;

class MpGateway extends Wechat
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
        return 'JSAPI';
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

        $payRequest = [
            'appId'     => $this->user_config->get('app_id'),
            'timeStamp' => strval(time()),
            'nonceStr'  => $this->createNonceStr(),
            'package'   => 'prepay_id='.$this->preOrder($config_biz)['prepay_id'],
            'signType'  => 'MD5',
        ];
        $payRequest['paySign'] = $this->getSign($payRequest);

        return $payRequest;
    }
}
