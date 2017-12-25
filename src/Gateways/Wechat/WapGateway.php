<?php

namespace ailiangkuai\payment\Gateways\Wechat;

use ailiangkuai\payment\Exceptions\InvalidArgumentException;

class WapGateway extends Wechat
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
        return 'MWEB';
    }

    /**
     * pay a order.
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

        $data = $this->preOrder($config_biz);

        return is_null($this->user_config->get('return_url')) ? $data['mweb_url'] : $data['mweb_url'].
                        '&redirect_url='.urlencode($this->user_config->get('return_url'));
    }
}
