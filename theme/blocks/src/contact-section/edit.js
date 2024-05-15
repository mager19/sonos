/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText, MediaPlaceholder, InspectorControls } from '@wordpress/block-editor';

import { PanelBody, PanelRow, Button, TextControl } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit(props) {
	const { attributes, setAttributes } = props;

	const { title, description, image, shortcode } = attributes;

	const blockProps = useBlockProps({
		className: 'py-30 bg-grey-100',
		style: {
			backgroundImage: 'url(' + image.url + ')',
			backgroundSize: 'cover',
			backgroundPosition: 'center',
			backgroundRepeat: 'no-repeat',
		}
	});


	/**
	 * Set attribute on select image
	 */
	const onSelectImage = (image) => {
		return props.setAttributes({
			image: {
				id: image.id,
				url: image.url,
				alt: image.alt
			}
		});
	};

	/**
	 * Set attribute on remove image
	 */
	const onRemoveImage = () => {
		return props.setAttributes({
			image: {
				id: '',
				url: '',
				alt: ''
			}
		});
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title='Contact settings'>
					<PanelRow>
						{!image.url ? (
							<MediaPlaceholder
								labels={{
									title: __('Icon'),
									name: __('Icon'),
								}}
								onSelect={onSelectImage}
								allowedTypes={['image']}
								accept="image/*"
								type="image"
								multiple={false}
								{...props}
							/>
						) : (
							<div className="imageFrame">
								<img src={image.url} className="w-full components-base-control" />
								<Button
									className="remove-image is-button button-secondary"
									onClick={onRemoveImage}
								>
									{<div>{__('Remove image', 'commvault')}</div>}
								</Button>
							</div>
						)}
					</PanelRow>
					<hr />
					<PanelRow>
						<TextControl
							label="Form shortcode"
							value={shortcode}
							onChange={(shortcode) => setAttributes({ shortcode })}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
				<div className="tagBlock">
					<span>{props.name}</span>
				</div>
				<div className="flex gap-10 content__cta">
					<div className="w-1/2 content">
						<RichText
							className="mt-0 text-5xl cta__title text-orangeSonos"
							tagName="h3"
							placeholder={__('Hero Intro text Lorem ipsum dolor sit amed')}
							value={title}
							onChange={(title) => setAttributes({ title })}
						/>

						<RichText
							className="cta__description text-body-s"
							tagName="p"
							placeholder={__('General site description Intro text Lorem ipsum dolor sit amed Lorem ipsum dolor sit amed Lorem ipsum dolor sit amed Lorem ipsum dolor sit amed.')}
							value={description}
							onChange={(description) => setAttributes({ description })}
						/>
					</div>
					<div className="flex items-center w-1/2">
						<span className='text-gray-400'>Please insert shortcode on sidebar</span>
					</div>
				</div>

			</div>
		</>
	);
}
