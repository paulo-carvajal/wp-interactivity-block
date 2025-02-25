import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";

export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps();

  return (
    <p {...blockProps}>
      {__("Pac Blocks – hello from the editor!", "pac-blocks")}
    </p>
  );
}
