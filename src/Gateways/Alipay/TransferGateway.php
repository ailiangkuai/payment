<?php

namespace ailiangkuai\payment\Gateways\Alipay;

class TransferGateway extends Alipay
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
        return 'alipay.fund.trans.toaccount.transfer';
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
        return '';
    }

    /**
     * transfer amount to account.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array $config_biz
     *
     * @return array|bool
     */
    public function pay(array $config_biz = [])
    {
        return $this->getResult($config_biz, $this->getMethod());
    }
}
