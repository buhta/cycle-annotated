<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Fixtures;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Relation\Morphed\BelongsToMorphed;

/**
 * @Entity()
 */
#[Entity]
class Label
{
    /** @Column(type="primary") */
    #[Column(type: "primary")]
    protected $id;

    /** @Column(type="text") */
    #[Column(type: "text")]
    protected $text;

    /** @BelongsToMorphed(target="LabelledInterface", indexCreate=false) */
    #[BelongsToMorphed(target: "LabelledInterface", indexCreate: false)]
    protected $owner;
}
