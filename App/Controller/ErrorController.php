<?php 

namespace App\Controller;

class ErrorController
{
    /**
     * Méthode pour rendre une vue avec un template
     * @param string $template Le nom du template à inclure
     * @param string|null $title Le titre de la page
     * @param array $data Les données à passer au template
     * @return void
     */
    public function render(string $template, ?string $title, array $data = []): void
    {
        include __DIR__ . "/../../template/template_" . $template . ".php";
    }

    public function error404()
    {
        http_response_code(404);
        return $this->render("error404", "Error404");
    }

    public function error401()
    {
        return $this->render("error401", "Error401");
    }
}
