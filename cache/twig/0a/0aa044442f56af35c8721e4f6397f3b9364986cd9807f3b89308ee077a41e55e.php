<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_257ac80e17db07b6965a6a1dcbd1fa1d76edb7dbca68e314fbdf6652c2d9e974 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/git_sync_repo_link.html.twig"));

        // line 1
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "git_sync_repo_link")) {
            // line 2
            echo "  ";
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                // line 3
                echo "    ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "git_sync_repo_link");
                // line 4
                echo "    ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon"))) {
                    // line 5
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                        // line 6
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 7
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                        // line 8
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 9
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                        // line 10
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 11
                        echo "      ";
                    } else {
                        // line 12
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 13
                        echo "      ";
                    }
                    // line 14
                    echo "    ";
                } else {
                    // line 15
                    echo "      ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon");
                    // line 16
                    echo "    ";
                }
                // line 17
                echo "    ";
                if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link")))) {
                    // line 18
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 19
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 20
                        echo "      ";
                    } else {
                        // line 21
                        echo "        ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text"))) {
                            // line 22
                            echo "          ";
                            $context["git_repo_link_text"] = "View Content Repository";
                            // line 23
                            echo "        ";
                        } else {
                            // line 24
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 25
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                // line 26
                                echo "          ";
                            } else {
                                // line 27
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                // line 28
                                echo "          ";
                            }
                            // line 29
                            echo "        ";
                        }
                        // line 30
                        echo "      ";
                    }
                    // line 31
                    echo "      ";
                    if ( !($context["presentationslides"] ?? null)) {
                        // line 32
                        echo "        <a class=\"";
                        echo twig_escape_filter($this->env, ($context["link_classes"] ?? null), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_url"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "\" target=\"_blank\">
          <i class=\"fa fa-";
                        // line 33
                        echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "</a>
      ";
                    }
                    // line 35
                    echo "    ";
                } else {
                    // line 36
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 37
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 38
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 39
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 40
                        echo "      ";
                    } else {
                        // line 41
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 42
                        echo "      ";
                    }
                    // line 43
                    echo "      ";
                    if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                        // line 44
                        echo "        ";
                        $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                        // line 45
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                        // line 47
                        echo "      ";
                    }
                    // line 48
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                        // line 49
                        echo "        ";
                        $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                        // line 50
                        echo "      ";
                    } else {
                        // line 51
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 52
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text"))) {
                                // line 53
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit this Page";
                                // line 54
                                echo "          ";
                            } else {
                                // line 55
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                // line 56
                                echo "          ";
                            }
                            // line 57
                            echo "        ";
                        } else {
                            // line 58
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text"))) {
                                // line 59
                                echo "            ";
                                $context["git_repo_link_text"] = "Edit these Slides";
                                // line 60
                                echo "          ";
                            } else {
                                // line 61
                                echo "            ";
                                $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                // line 62
                                echo "          ";
                            }
                            // line 63
                            echo "        ";
                        }
                        // line 64
                        echo "      ";
                    }
                    // line 65
                    echo "      ";
                    if (($context["presentationslides"] ?? null)) {
                        echo "(";
                    }
                    echo "<a class=\"";
                    echo twig_escape_filter($this->env, ($context["link_classes"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_url"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                    echo "</a>";
                    if (($context["presentationslides"] ?? null)) {
                        echo ")";
                    }
                    // line 66
                    echo "    ";
                }
                // line 67
                echo "  ";
            }
        } else {
            // line 69
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "enabled", []) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []))))) {
                // line 70
                echo "    ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", []) . "/admin/plugins/git-sync");
                // line 71
                echo "    ";
                if ( !($context["presentationslides"] ?? null)) {
                    // line 72
                    echo "      <a class=\"";
                    echo twig_escape_filter($this->env, ($context["link_classes"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ($context["admin_panel_appearance_url"] ?? null), "html", null, true);
                    echo "\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    ";
                }
                // line 75
                echo "  ";
            } else {
                // line 76
                echo "    ";
                if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", []) &&  !($context["presentationslides"] ?? null))) {
                    // line 77
                    echo "      ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "git-sync", [], "array"), "repository", []);
                    // line 78
                    echo "      ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]);
                    // line 79
                    echo "      ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 80
                        echo "        ";
                        $context["git_repo_link_icon"] = "github";
                        // line 81
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 82
                        echo "      ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 83
                        echo "        ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 84
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 85
                        echo "      ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 86
                        echo "        ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 87
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("src/master", ["user/" => "/"]));
                        // line 88
                        echo "      ";
                    } else {
                        // line 89
                        echo "        ";
                        $context["git_repo_link_icon"] = "git";
                        // line 90
                        echo "        ";
                        $context["git_repo_link_url"] = (twig_replace_filter(($context["git_sync_repo"] ?? null), [".git" => "/"]) . twig_replace_filter("blob/master", ["user/" => "/"]));
                        // line 91
                        echo "      ";
                    }
                    // line 92
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", [])) {
                        // line 93
                        echo "        ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link", []);
                        // line 94
                        echo "      ";
                    } elseif (($context["presentationpagepath"] ?? null)) {
                        // line 95
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . ($context["presentationpagepath"] ?? null));
                        // line 96
                        echo "      ";
                    } else {
                        // line 97
                        echo "        ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/" => "/"]));
                        // line 98
                        echo "      ";
                    }
                    // line 99
                    echo "      ";
                    if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon"))) {
                        // line 100
                        echo "        ";
                        $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_icon");
                        // line 101
                        echo "      ";
                    }
                    // line 102
                    echo "      ";
                    if ((($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "type_of_git_sync_repo_link")))) {
                        // line 103
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 104
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 105
                            echo "        ";
                        } else {
                            // line 106
                            echo "          ";
                            if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "git_sync_repo_link_text"))) {
                                // line 107
                                echo "            ";
                                $context["git_repo_link_text"] = "View Content Repository";
                                // line 108
                                echo "          ";
                            } else {
                                // line 109
                                echo "            ";
                                if ( !($context["presentationslides"] ?? null)) {
                                    // line 110
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                    // line 111
                                    echo "            ";
                                } else {
                                    // line 112
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                    // line 113
                                    echo "            ";
                                }
                                // line 114
                                echo "          ";
                            }
                            // line 115
                            echo "        ";
                        }
                        // line 116
                        echo "        ";
                        if ( !($context["presentationslides"] ?? null)) {
                            // line 117
                            echo "          <a class=\"";
                            echo twig_escape_filter($this->env, ($context["link_classes"] ?? null), "html", null, true);
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, ($context["git_sync_repo_link"] ?? null), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                            echo "\" target=\"_blank\">
            <i class=\"fa fa-";
                            // line 118
                            echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                            echo "\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                            echo "</a>
        ";
                        }
                        // line 120
                        echo "      ";
                    } else {
                        // line 121
                        echo "        ";
                        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "count", []) &&  !($context["presentationslides"] ?? null))) {
                            // line 122
                            echo "          ";
                            $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), [(("/" . $this->getAttribute(                            // line 123
($context["page"] ?? null), "template", [])) . ".md") => "/"]);
                            // line 125
                            echo "        ";
                        }
                        // line 126
                        echo "        ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", [])) {
                            // line 127
                            echo "          ";
                            $context["git_repo_link_text"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_text", []);
                            // line 128
                            echo "        ";
                        } else {
                            // line 129
                            echo "          ";
                            if ( !($context["presentationslides"] ?? null)) {
                                // line 130
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text"))) {
                                    // line 131
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit this Page";
                                    // line 132
                                    echo "            ";
                                } else {
                                    // line 133
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_link_text");
                                    // line 134
                                    echo "            ";
                                }
                                // line 135
                                echo "          ";
                            } else {
                                // line 136
                                echo "            ";
                                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text"))) {
                                    // line 137
                                    echo "              ";
                                    $context["git_repo_link_text"] = "Edit these Slides";
                                    // line 138
                                    echo "            ";
                                } else {
                                    // line 139
                                    echo "              ";
                                    $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_git_sync_repo_presentation_link_text");
                                    // line 140
                                    echo "            ";
                                }
                                // line 141
                                echo "          ";
                            }
                            // line 142
                            echo "        ";
                        }
                        // line 143
                        echo "        ";
                        if (($context["presentationslides"] ?? null)) {
                            echo "(";
                        }
                        echo "<a class=\"";
                        echo twig_escape_filter($this->env, ($context["link_classes"] ?? null), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_url"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fa fa-";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_icon"] ?? null), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>";
                        echo twig_escape_filter($this->env, ($context["git_repo_link_text"] ?? null), "html", null, true);
                        echo "</a>";
                        if (($context["presentationslides"] ?? null)) {
                            echo ")";
                        }
                        // line 144
                        echo "      ";
                    }
                    // line 145
                    echo "    ";
                }
                // line 146
                echo "  ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 146,  498 => 145,  495 => 144,  476 => 143,  473 => 142,  470 => 141,  467 => 140,  464 => 139,  461 => 138,  458 => 137,  455 => 136,  452 => 135,  449 => 134,  446 => 133,  443 => 132,  440 => 131,  437 => 130,  434 => 129,  431 => 128,  428 => 127,  425 => 126,  422 => 125,  420 => 123,  418 => 122,  415 => 121,  412 => 120,  405 => 118,  396 => 117,  393 => 116,  390 => 115,  387 => 114,  384 => 113,  381 => 112,  378 => 111,  375 => 110,  372 => 109,  369 => 108,  366 => 107,  363 => 106,  360 => 105,  357 => 104,  354 => 103,  351 => 102,  348 => 101,  345 => 100,  342 => 99,  339 => 98,  336 => 97,  333 => 96,  330 => 95,  327 => 94,  324 => 93,  321 => 92,  318 => 91,  315 => 90,  312 => 89,  309 => 88,  306 => 87,  303 => 86,  300 => 85,  297 => 84,  294 => 83,  291 => 82,  288 => 81,  285 => 80,  282 => 79,  279 => 78,  276 => 77,  273 => 76,  270 => 75,  261 => 72,  258 => 71,  255 => 70,  252 => 69,  248 => 67,  245 => 66,  226 => 65,  223 => 64,  220 => 63,  217 => 62,  214 => 61,  211 => 60,  208 => 59,  205 => 58,  202 => 57,  199 => 56,  196 => 55,  193 => 54,  190 => 53,  187 => 52,  184 => 51,  181 => 50,  178 => 49,  175 => 48,  172 => 47,  170 => 45,  168 => 44,  165 => 43,  162 => 42,  159 => 41,  156 => 40,  153 => 39,  150 => 38,  147 => 37,  144 => 36,  141 => 35,  134 => 33,  125 => 32,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if theme_var('git_sync_repo_link') %}
  {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
    {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
    {% if theme_var('custom_git_sync_repo_link_icon') is empty %}
      {% if 'github' in git_repo_link_url %}
        {% set git_repo_link_icon = \"github\" %}
      {% elseif 'gitlab' in git_repo_link_url %}
        {% set git_repo_link_icon = \"gitlab\" %}
      {% elseif 'bitbucket' in git_repo_link_url %}
        {% set git_repo_link_icon = \"bitbucket\" %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
      {% endif %}
    {% else %}
      {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
    {% endif %}
    {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link') is empty %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if theme_var('custom_git_sync_repo_link_text') is empty %}
          {% set git_repo_link_text = 'View Content Repository' %}
        {% else %}
          {% if not presentationslides %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if not presentationslides %}
        <a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
          <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
      {% endif %}
    {% else %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if (page.children.count) and (not presentationslides) %}
        {% set git_repo_link_url = (git_repo_link_url | replace({
          ('/' ~ page.template ~ '.md'): '/'
        })) %}
      {% endif %}
      {% if page.header.git_sync_repo_link_text %}
        {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
      {% else %}
        {% if not presentationslides %}
          {% if theme_var('custom_git_sync_repo_link_text') is empty %}
            {% set git_repo_link_text = 'Edit this Page' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
          {% endif %}
        {% else %}
          {% if theme_var('custom_git_sync_repo_presentation_link_text') is empty %}
            {% set git_repo_link_text = 'Edit these Slides' %}
          {% else %}
            {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
          {% endif %}
        {% endif %}
      {% endif %}
      {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
    {% endif %}
  {% endif %}
{% else %}
  {% if not (config.plugins['git-sync'].enabled) or (config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty) %}
    {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
    {% if not presentationslides %}
      <a class=\"{{ link_classes }}\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\">
        <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>Setup Git Sync</a>
    {% endif %}
  {% else %}
    {% if not (page.header.hide_git_sync_repo_link and not (presentationslides)) %}
      {% set git_sync_repo = config.plugins['git-sync'].repository %}
      {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
      {% if 'github' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"github\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'gitlab' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"gitlab\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% elseif 'bitbucket' in git_sync_repo_link %}
        {% set git_repo_link_icon = \"bitbucket\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'src/master' | replace({'user/': '/'}) %}
      {% else %}
        {% set git_repo_link_icon = \"git\" %}
        {% set git_repo_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' | replace({'user/': '/'}) %}
      {% endif %}
      {% if page.header.git_sync_repo_link %}
        {% set git_repo_link_url = page.header.git_sync_repo_link %}
      {% elseif presentationpagepath %}
        {% set git_repo_link_url = git_repo_link_url ~ presentationpagepath %}
      {% else %}
        {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
      {% endif %}
      {% if theme_var('custom_git_sync_repo_link_icon') is not empty %}
        {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
      {% endif %}
      {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link') is empty %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if theme_var('git_sync_repo_link_text') is empty %}
            {% set git_repo_link_text = 'View Content Repository' %}
          {% else %}
            {% if not presentationslides %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if not presentationslides %}
          <a class=\"{{ link_classes }}\" href=\"{{ git_sync_repo_link}}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
            <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>
        {% endif %}
      {% else %}
        {% if (page.children.count) and (not presentationslides) %}
          {% set git_repo_link_url = (git_repo_link_url | replace({
            ('/' ~ page.template ~ '.md'): '/'
          })) %}
        {% endif %}
        {% if page.header.git_sync_repo_link_text %}
          {% set git_repo_link_text = page.header.git_sync_repo_link_text %}
        {% else %}
          {% if not presentationslides %}
            {% if theme_var('custom_git_sync_repo_link_text') is empty %}
              {% set git_repo_link_text = 'Edit this Page' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
          {% else %}
            {% if theme_var('custom_git_sync_repo_presentation_link_text') is empty %}
              {% set git_repo_link_text = 'Edit these Slides' %}
            {% else %}
              {% set git_repo_link_text = theme_var('custom_git_sync_repo_presentation_link_text') %}
            {% endif %}
          {% endif %}
        {% endif %}
        {% if presentationslides %}({% endif %}<a class=\"{{ link_classes }}\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\"><i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>{{ git_repo_link_text }}</a>{% if presentationslides %}){% endif %}
      {% endif %}
    {% endif %}
  {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\themes\\quark-open-publishing\\templates\\partials\\git_sync_repo_link.html.twig");
    }
}
