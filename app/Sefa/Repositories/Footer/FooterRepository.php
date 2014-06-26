<?php namespace Sefa\Repositories\Footer;

use Article;
use Config;
use footer;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
class FooterRepository extends Validator implements BaseRepositoryInterface

                {
                protected $perPage;
                protected $footer;
                protected $perPageFooter;
                /**
                 * Rules
                 *
                 * @var array
                 */
                protected static $rules = ['hl_ueberuns' => 'required', 'hl_rezepte' => 'required', 'hl_contact' => 'required', 'ct_ueberuns' => 'required', 'ct_rezepte' => 'required', 'ct_contact' => 'required', ];
                public function __construct(footer $footer)

                                {
                                $config = Config::get('sfcms');
                                $this->perPage = $config['modules']['per_page'];
                                $this->footer = $footer;
                                $this->perPageFooter = $config['modules']['per_page_footer'];
                                }
                public function all()

                                {
                                return $this->footer->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
                                }
                public function lists()

                                {
                                return $this->footer->get()->lists('title', 'id');
                                }
                public function paginate($perPage = null, $all = false)

                                {
                                if ($all) return $this->footer->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
                                return $this->footer->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
                                }
                public function paginate_footer($perPageFooter = null, $all = false)

                                {
                                if ($all) return $this->article->with('tags')->orderBy('id', 'DESC')->paginate(($perPageFooter) ? $perPageFooter : $this->perPageFooter);
                                return $this->article->with('tags')->orderBy('id', 'DESC')->where('is_published', 1)->paginate(($perPageFooter) ? $perPageFooter : $this->perPageFooter);
                                }
                public function find($id)

                                {
                                return $this->footer->findOrFail($id);
                                }
                public function create($attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                if ($this->isValid($attributes))
                                                {
                                                $this->footer->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('footer validation failed', $this->getErrors());
                                }
                public function update($id, $attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                $this->footer = $this->find($id);
                                if ($this->isValid($attributes))
                                                {
                                                $this->footer->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('footer validation failed', $this->getErrors());
                                }
                public function destroy($id)

                                {
                                $footer = $this->footer->find($id)->delete();
                                }
                public function togglePublish($id)

                                {
                                $footer = $this->footer->find($id);
                                $footer->is_published = ($footer->is_published) ? false : true;
                                $footer->save();
                                return Response::json(array(
                                                'result' => 'success',
                                                'changed' => ($footer->is_published) ? 1 : 0
                                ));
                                }
                }



