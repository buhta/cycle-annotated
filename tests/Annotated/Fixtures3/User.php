<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Fixtures3;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Relation\HasOne;
use Cycle\Annotated\Annotation\Relation\Inverse;

/**
 * @Entity()
 */
#[Entity]
class User
{
    /** @Column(type="primary") */
    #[Column(type: "primary")]
    protected $id;

    /** @HasOne(target=Simple::class, inverse=@Inverse(as="user", type="belongsTo")) */
    #[HasOne(target: Simple::class)]
    #[Inverse(as: "user", type: "belongsTo")]
    protected $simple;
}
