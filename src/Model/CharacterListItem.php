<?php

namespace Jikan\Model;

use Jikan\Parser;

/**
 * Class CharacterParser
 *
 * @package Jikan\Model
 */
class CharacterListItem
{
    /**
     * @var int
     */
    public $malId;

    /**
     * @var string
     */
    public $characterUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var VoiceActor[]
     */
    public $voiceActors = [];

    /**
     * @param Parser\Character\CharacterListItemParser $parser
     *
     * @return CharacterListItem
     */
    public static function fromParser(Parser\Character\CharacterListItemParser $parser): self
    {
        $instance = new self();
        $instance->voiceActors = $parser->getVoiceActors();
        $instance->malId = $parser->getMalId();
        $instance->characterUrl = $parser->getCharacterUrl();
        $instance->name = $parser->getName();
        $instance->imageUrl = $parser->getImage();

        return $instance;
    }

    /**
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * @return string
     */
    public function getCharacterUrl(): string
    {
        return $this->characterUrl;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return VoiceActor[]
     */
    public function getVoiceActors(): array
    {
        return $this->voiceActors;
    }
}
