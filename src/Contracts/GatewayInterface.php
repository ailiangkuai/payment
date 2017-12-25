<?php

namespace ailiangkuai\payment\Contracts;

interface GatewayInterface
{
    /**
     * pay a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array $config_biz
     *
     * @return mixed
     */
    public function pay(array $config_biz);

    /**
     * refund a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array|string $config_biz
     *
     * @return array|bool
     */
    public function refund($config_biz);

    /**
     * close a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array|string $config_biz
     *
     * @return array|bool
     */
    public function close($config_biz);

    /**
     * find a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param string $out_trade_no
     *
     * @return array|bool
     */
    public function find($out_trade_no);

    /**
     * verify notify.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param mixed  $data
     * @param string $sign
     * @param bool   $sync
     *
     * @return array|bool
     */
    public function verify($data, $sign = null, $sync = false);
}
