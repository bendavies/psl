<?php

declare(strict_types=1);

namespace Psl\Type;

/**
 * @template Tl
 * @template Tr
 *
 * @psalm-param Type<Tl> $left_type
 * @psalm-param Type<Tr> $right_type
 *
 * @psalm-return Type<Tl|Tr>
 */
function union(
    Type $left_type,
    Type $right_type
): Type {
    return new Internal\UnionType($left_type, $right_type);
}
