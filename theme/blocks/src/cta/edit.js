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
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';

import { PanelBody } from '@wordpress/components';

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

	const { title, description } = attributes;

	const blockProps = useBlockProps({
		className: 'align-full bg-slate-100 text-white py-20 px-4',
	});

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Cta Settings')} initialOpen="true">

				</PanelBody>
			</InspectorControls>

			<div {...blockProps}>
				<div className="content__cta bg-gris-oscuro">
					<RichText
						className="mt-0 text-5xl cta__title text-gris-oscuro"
						tagName="h3"
						placeholder={__('Hero Intro text Lorem ipsum dolor sit amed')}
						value={title}
						onChange={(title) => setAttributes({ title })}
					/>

					<RichText
						className="cta__description text-lightGraySonos text-body-l"
						tagName="p"
						placeholder={__('General site description Intro text Lorem ipsum dolor sit amed Lorem ipsum dolor sit amed Lorem ipsum dolor sit amed Lorem ipsum dolor sit amed.')}
						value={description}
						onChange={(description) => setAttributes({ description })}
					/>
				</div>
			</div>
		</>

	);
}
