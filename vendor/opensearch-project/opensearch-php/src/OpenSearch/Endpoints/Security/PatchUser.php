<?php

declare(strict_types=1);

/**
 * SPDX-License-Identifier: Apache-2.0
 *
 * The OpenSearch Contributors require contributions made to
 * this file be licensed under the Apache-2.0 license or a
 * compatible open source license.
 *
 * Modifications Copyright OpenSearch Contributors. See
 * GitHub history for details.
 */

namespace OpenSearch\Endpoints\Security;

use OpenSearch\Exception\RuntimeException;
use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class PatchUser extends AbstractEndpoint
{
    protected $username;

    public function getURI(): string
    {
        if (!isset($this->username) || $this->username === '') {
            throw new RuntimeException('username is required for patch_user');
        }
        $username = $this->username;

        return "/_plugins/_security/api/internalusers/$username";
    }

    public function getParamWhitelist(): array
    {
        return [
            'pretty',
            'human',
            'error_trace',
            'source',
            'filter_path'
        ];
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function setBody($body): static
    {
        if (is_null($body)) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setUsername($username): static
    {
        if (is_null($username)) {
            return $this;
        }
        $this->username = $username;

        return $this;
    }
}
