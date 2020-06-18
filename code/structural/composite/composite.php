<?php
/**
 * Компоновщик — это структурный паттерн проектирования, 
 * который позволяет сгруппировать множество объектов 
 * в древовидную структуру, а затем работать с ней так, 
 * как будто это единичный объект.
 */
interface Renderable
{
    public function render(): string;
}

/**
 * The composite node MUST extend the component contract. This is mandatory for building
 * a tree of components.
 */
class Form implements Renderable
{
    private $elements = [];

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}


class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}

class TextElement implements Renderable
{
    private $text = '';

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}

$form = new Form();
$embed = new Form();

$form->addElement(new TextElement('Email:'));
$form->addElement(new InputElement());

$embed->addElement(new TextElement('Password:'));
$embed->addElement(new InputElement());
$embed->addElement(new InputElement());
$embed->addElement(new InputElement());
$form->addElement($embed);

var_dump($form->render());
