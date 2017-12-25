<?php

namespace ailiangkuai\payment\Gateways\Alipay;

class PosGateway extends Alipay
{
    /**
     * get method config.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @return string
     */
    protected function getMethod()
    {
        return 'alipay.trade.pay';
    }

    /**
     * get productCode config.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @return string
     */
    protected function getProductCode()
    {
        return 'FACE_TO_FACE_PAYMENT';
    }

    /**
     * pay a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array  $config_biz
     * @param string $scene
     *
     * @return array|bool
     */
    public function pay(array $config_biz = [], $scene = 'bar_code')
    {
        $config_biz['scene'] = $scene;

        return $this->getResult($config_biz, $this->getMethod());
    }
}
