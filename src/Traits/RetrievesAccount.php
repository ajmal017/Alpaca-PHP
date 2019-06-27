<?php
declare(strict_types=1);

/**
 * Created by: bernard <o.omonayajo@gmail.com>
 * Created on: 2019-06-27, 15:15.
 * @license Apache-2.0
 */

namespace RagingProdigy\Alpaca\Traits;

use Exception;
use RagingProdigy\Alpaca\Entities\Account;

/**
 * Trait Account.
 */
trait RetrievesAccount
{
    /**
     * @return Account
     * @throws Exception
     */
    public function getAccount(): Account
    {
        return new Account($this->get('account'));
    }
}
